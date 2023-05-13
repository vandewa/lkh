<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atasan;
use Yajra\DataTables\DataTables;

class AtasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Atasan::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn =
                        '<div>
                        <a href="' . route('atasan.edit', $row->id) . '" class="px-3 btn btn-info radius-30"><i class="mr-1 bx bx-edit-alt"></i>Edit</a>
                        <a href="' . route('atasan.destroy', $row->id) . '" class="px-3 btn btn-danger radius-30 delete-data-table"><i class="mr-1 bx bx-trash-alt"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('atasan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('atasan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Atasan::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'bidang' => $request->bidang,
            'opd_tp' => $request->opd_tp,
        ]);

        return redirect()->route('atasan.index')->with('store', 'oke');

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
        $data = Atasan::find($id);

        return view('atasan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Atasan::find($id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'bidang' => $request->bidang,
            'opd_tp' => $request->opd_tp,
        ]);

        return redirect()->route('atasan.index')->with('edit', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Atasan::destroy($id);
    }
}