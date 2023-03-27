<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UserStoreValidation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            if(auth()->user()->id == 1){
                $data = User::select('*');
            } else {
                $data = User::whereNotIn('id', [1])->select('*');
            }
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn =
                    '<div>
                        <a href="'.route('user.edit', $row->id ).'" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                        <a href="'.route('user.destroy', $row->id ).'" class="btn btn-danger px-3 radius-30 delete-data-table"><i class="bx bx-trash-alt mr-1"></i>Delete</a>
                    </div>';
                    return $actionBtn;
                })
                ->addColumn('tombol',function ($data) {

                    $check =  $data->status ? "checked": "";
                    return '<label class="switch">
                        <input type="checkbox" '.$check.' onclick="centang('  . $data->id . ')">
                        <span class="slider round"></span>
                        </label>';
                    }
                )
                ->rawColumns(['action', 'tombol'])
                ->make(true);
        }

        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreValidation $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'password' => Hash::make($request->password),
            'status' => 1,
            'tempat_lahir_tp' => $request->tempat_lahir_tp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'jabatan_tp' => $request->jabatan_tp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir_tp' => $request->tempat_lahir_tp,
            'opd_tp' => $request->opd_tp,
        ]);

        return redirect()->route('user.index')->with('store', 'oke');
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
        $data = User::find($id);

        return view('user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserStoreValidation $request, string $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'status' => 1,
            'tempat_lahir_tp' => $request->tempat_lahir_tp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'jabatan_tp' => $request->jabatan_tp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir_tp' => $request->tempat_lahir_tp,
            'opd_tp' => $request->opd_tp,
        ]);

        if($request->password){
            User::find($id)->update([
                'password' => Hash::make($request->password),
            ]);
        }
        
        return redirect()->route('user.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
    }

    public function gantiPassword(Request $request)
    {
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('edit', 'oke');
    }

    public function editProfile(Request $request)
    {
        User::find(auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back()->with('edit', 'oke');
    }

    public function changeAccess(Request $request)
    {
        $comp = User::find($request->id);
        $comp->status = !$comp->status;
        $comp->save();
    
        return response()->json(
            [
                'success' => true,
                'message' => 'Data has been successfully changed!'
            ], 200
        );
    }
}
