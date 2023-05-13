<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktifitas;
use App\Models\Jabatan;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Http\Requests\AktifitasStoreValidation;
use App\Models\Kegiatan;
use App\Models\Lkh;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Models\Tanggal;
use Illuminate\Support\Facades\Auth;

class AktifitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            if (auth()->user()->id == 1 || auth()->user()->id == 2) {
                $data = Aktifitas::with(['nama_usernya'])->where('keterangan', null)->select('*');
            } else {
                $data = Aktifitas::with(['nama_usernya'])
                    ->where('user_id', auth()->user()->id)
                    ->where('keterangan', null)
                    ->select('*');
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn =
                        '<div>
                        <a href="' . route('aktifitas.edit', $row->id) . '" class="px-3 btn btn-info radius-30"><i class="mr-1 bx bx-edit-alt"></i>Edit</a>
                        <a href="' . route('aktifitas.destroy', $row->id) . '" class="px-3 btn btn-danger radius-30 delete-data-table"><i class="mr-1 bx bx-trash-alt"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                })
                ->addColumn('tanggalnya', function ($row) {
                    return Carbon::createFromFormat('Y-m-d', $row->tanggal)->isoFormat('D MMMM Y');
                })
                ->addColumn('jam', function ($row) {
                    if ($row->waktu_mulai != null) {
                        if ($row->waktu_mulai == $row->waktu_selesai) {
                            return Carbon::createFromFormat('H:i:s', $row->waktu_mulai)->format('H:i') . ' WIB';
                        } else {
                            return Carbon::createFromFormat('H:i:s', $row->waktu_mulai)->format('H:i') . ' - ' . Carbon::createFromFormat('H:i:s', $row->waktu_selesai)->format('H:i') . ' WIB ';
                        }
                    } else {
                        return $row->durasi_menit;
                    }

                })

                ->rawColumns(['action'])
                ->make(true);
        }

        return view('aktifitas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->id == 1 || auth()->user()->id == 2) {
            $aktifitas = Jabatan::all();
        } else {
            $aktifitas = Jabatan::with(['kegiatannya'])
                ->where('jabatan_tp', auth()->user()->jabatan_tp)
                ->where('opd_tp', auth()->user()->opd_tp)
                ->orderByRaw('(SELECT nama_kegiatan FROM kegiatans WHERE kegiatans.id = jabatans.kegiatan_id)')
                ->get()
                ->pluck('kegiatannya.nama_kegiatan', 'kegiatannya.id');
        }

        return view('aktifitas.create', compact('aktifitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //BPBD cek ketika da yang dupikat
        if (User::where('id', $request->user_id)->first()->opd_tp == 'OPD_TP_01') {
            $cek = Aktifitas::where('tanggal', $request->tanggal)->where('user_id', $request->user_id)->first();
        } else {
            $cek = null;
        }

        if ($cek) {
            return redirect()->route('aktifitas.index')->with('error', 'error');
        } else {

            $aktifitas = Aktifitas::create([
                'user_id' => $request->user_id,
                'tanggal' => $request->tanggal,
                'durasi_menit' => $request->durasi_menit,
                'deskripsi' => $request->deskripsi,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_selesai' => $request->waktu_selesai,
            ]);

            if ($request->kegiatan_id) {
                $a = [];
                $kegiatan = [];
                foreach ($request->kegiatan_id as $list) {
                    $a[] = Kegiatan::where('id', $list)->first()->nama_kegiatan;

                    Lkh::create([
                        'aktifitas_id' => $aktifitas->id,
                        'kegiatan_id' => $list,
                    ]);
                }

                $kegiatan = '-' . implode(" -", $a);

                Aktifitas::find($aktifitas->id)->update([
                    'nama_kegiatan' => $kegiatan,
                ]);
            }


            return redirect()->route('aktifitas.index')->with('store', 'oke');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (auth()->user()->id == 1 || auth()->user()->id == 2) {
            $aktifitas = Jabatan::with(['kegiatannya'])->get()->pluck('kegiatannya.nama_kegiatan', 'kegiatannya.id');
        } else {
            $aktifitas = Jabatan::with(['kegiatannya'])
                ->where('jabatan_tp', auth()->user()->jabatan_tp)
                ->where('opd_tp', auth()->user()->opd_tp)
                ->orderByRaw('(SELECT nama_kegiatan FROM kegiatans WHERE kegiatans.id = jabatans.kegiatan_id)')
                ->get()
                ->pluck('kegiatannya.nama_kegiatan', 'kegiatannya.id');
        }

        $data = Aktifitas::find($id);

        $lkh = Lkh::with(['kegiatannya'])->where('aktifitas_id', $id)
            ->get()
            ->pluck('kegiatannya.id');


        return view('aktifitas.edit', compact('aktifitas', 'data', 'lkh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->kegiatan_id) {
            Lkh::where('aktifitas_id', $id)->delete();
            $a = [];
            $kegiatan = [];
            foreach ($request->kegiatan_id as $list) {
                $a[] = Kegiatan::where('id', $list)->first()->nama_kegiatan;

                Lkh::create([
                    'aktifitas_id' => $id,
                    'kegiatan_id' => $list,
                ]);
            }

            $kegiatan = '-' . implode(" -", $a);
        } else {
            $kegiatan = null;
        }

        Aktifitas::find($id)->update([
            'user_id' => $request->user_id,
            'tanggal' => $request->tanggal,
            'durasi_menit' => $request->durasi_menit,
            'deskripsi' => $request->deskripsi,
            'nama_kegiatan' => $kegiatan,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
        ]);

        return redirect()->route('aktifitas.index')->with('edit', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Aktifitas::destroy($id);
    }

    public function cetakLKH()
    {
        $tahun = Aktifitas::whereHas('nama_usernya', function ($a) {
            $a->where('opd_tp', Auth::user()->opd_tp);
        })
            ->select(DB::raw("year(tanggal) as tahun"))
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun', 'tahun');

        $bulannya = Aktifitas::whereHas('nama_usernya', function ($a) {
            $a->where('opd_tp', Auth::user()->opd_tp);
        })
            ->select(DB::raw("LPAD(MONTH(tanggal),2,'0') as bulan"))
            ->distinct()
            ->orderBy('bulan', 'asc')
            ->pluck('bulan', 'bulan');

        $bulan = $bulannya->map(function ($item, $key) {
            return konversiTanggal($item);
        })->toArray();

        //BPBD
        if (Auth::user()->opd_tp == 'OPD_TP_01') {
            $user = User::where('status', 1)
                ->where('opd_tp', Auth::user()->opd_tp)
                ->whereNotIn('id', [1, 2])
                ->leftJoin('com_codes', 'users.jabatan_tp', '=', 'com_codes.code_cd')
                ->select(DB::Raw("concat(name,' - ',code_nm,'') as opo, id"))
                ->orderBy('name', 'asc')
                ->pluck('opo', 'id');
        } else {
            $user = User::where('status', 1)
                ->where('opd_tp', Auth::user()->opd_tp)
                ->whereNotIn('id', [1, 2])
                ->orderBy('name', 'asc')
                ->pluck('name', 'id');
        }

        $opd = Auth::user()->opd_tp;

        return view('aktifitas.cetak', compact('tahun', 'bulan', 'user', 'opd'));

    }

    public function storeCetakLKH(Request $request)
    {
        $data = Tanggal::with([
            'lkh' => function ($a) use ($request) {
                $a->where('user_id', $request->user_id);
            }
        ])
            ->whereYear('tanggal', $request->tahun)
            ->whereMonth('tanggal', $request->bulan)
            ->get();

        // return $data;

        $nama = User::with(['jabatan', 'nama_opd', 'atasannya'])
            ->where('id', $request->user_id)
            ->first();


        $bulan = $request->bulan;
        $bulan_tahun = ($request->tahun . '-' . $request->bulan);

        $path = public_path('template/form_lkh.docx');
        $pathSave = storage_path('app/public/' . 'LKH-' . $nama->name . '-' . konversiTanggal($bulan) . '-' . $request->tahun . '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nama' => $nama->name ?? '',
            'opd' => $nama->nama_opd->code_nm ?? '',
            'jabatan' => $nama->jabatan->code_nm ?? '',
            'bulan' => strtoupper(Carbon::createFromFormat('Y-m', $bulan_tahun)->isoFormat('MMMM Y')),
            'tanggal_pengesahan' => Carbon::createFromFormat('Y-m-d', $request->tanggal)->isoFormat('D MMMM Y'),
            'nama_atasan' => $nama->atasannya->nama ?? '',
            'nip' => $nama->atasannya->nip ?? '',

        ]);
        $kampret = [];
        $keterangan = '';
        foreach ($data as $index => $a1) {
            array_push($kampret, [
                'no' => $index + 1,
                'tanggal' => Carbon::createFromFormat('Y-m-d', $a1->tanggal)->format('d/m/Y'),
                'hari' => strtoupper(Carbon::createFromFormat('Y-m-d', $a1->tanggal)->isoFormat('dddd')),
                'nama_kegiatan' => $a1->lkh->nama_kegiatan ?? '',
                'keterangan' => strtoupper($a1->lkh->keterangan ?? ''),
                'deskripsi' => strip_tags($a1->lkh->deskripsi ?? ''),
            ]);
        }

        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $templateProcessor->cloneRowAndSetValues('no', $kampret);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave)->deleteFileAfterSend(true);

    }

    public function storeCetakLKHDpupr(Request $request)
    {

        $data = Aktifitas::where('user_id', $request->user_id)
            ->whereYear('tanggal', $request->tahun)
            ->whereMonth('tanggal', $request->bulan)
            ->orderBy('tanggal', 'asc')
            ->get();

        $nama = User::with(['nama_opd', 'atasannya'])
            ->where('id', $request->user_id)
            ->first();

        $bulan = $request->bulan;

        $path = public_path('template/form_lkh_dpupr.docx');
        $pathSave = storage_path('app/public/' . 'LKH-' . $nama->name . '-' . konversiTanggal($bulan) . '-' . $request->tahun . '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nama' => $nama->name ?? '',
            'bidang' => $nama->atasannya->bidang ?? '',
            'nama_atasan' => $nama->atasannya->nama ?? '',
            'nip' => $nama->atasannya->nip ?? '',

        ]);
        $kampret = [];
        foreach ($data as $index => $a1) {
            if ($a1->waktu_mulai == $a1->waktu_selesai) {
                $waktu = Carbon::createFromFormat('H:i:s', $a1->waktu_mulai)->format('H.i') . ' WIB';
            } else {
                $waktu = Carbon::createFromFormat('H:i:s', $a1->waktu_mulai)->format('H.i') . ' - ' . Carbon::createFromFormat('H:i:s', $a1->waktu_selesai)->format('H.i') . ' WIB ';
            }

            array_push($kampret, [
                'n' => $index + 1,
                'tanggal' => Carbon::createFromFormat('Y-m-d', $a1->tanggal)->isoFormat('D MMMM Y'),
                'hari' => strtoupper(Carbon::createFromFormat('Y-m-d', $a1->tanggal)->isoFormat('dddd')),
                'deskripsi' => strip_tags($a1->deskripsi ?? ''),
                'waktu' => $waktu
            ]);
        }

        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $templateProcessor->cloneRowAndSetValues('n', $kampret);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave)->deleteFileAfterSend(true);

    }
}