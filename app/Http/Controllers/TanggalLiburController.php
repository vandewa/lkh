<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Aktifitas;

class TanggalLiburController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if($request->ajax()){
            if(auth()->user()->id == 1 || auth()->user()->id == 2){
                $data = Aktifitas::with(['nama_usernya'])
                        ->where('keterangan', '!=', null)
                        ->select('*');
            } else {
                $data = Aktifitas::with(['nama_usernya'])
                        ->where('user_id', auth()->user()->id)
                        ->where('keterangan', '!=', null)
                        ->select('*');
            }
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn =
                    '<div>
                        <a href="'.route('tanggal-libur.destroy', $row->id ).'" class="px-3 btn btn-danger radius-30 delete-data-table"><i class="mr-1 bx bx-trash-alt"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                })
                ->addColumn('tanggalnya', function($row){
                    return Carbon::createFromFormat('Y-m-d', $row->tanggal)->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('tanggal-libur.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $cek = Aktifitas::where('tanggal', $request->tanggal)->where('user_id', $request->user_id)->first();

        if($cek){
            return redirect()->route('tanggal-libur.index')->with('error-tanggal', 'error');
        } else {
            Aktifitas::create([
                'user_id' => $request->user_id,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
            ]);
        }

        return redirect()->route('tanggal-libur.index')->with('store', 'oke');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Aktifitas::destroy($id);
    }
}
