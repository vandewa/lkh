<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComCode;
use App\Models\Aktifitas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $total_user = User::whereNotIn('id', [1])->count();
        $total_aktifitas = Aktifitas::where('keterangan', null)->count();
        $tambah_aktifitas_hari_ini = Aktifitas::where('keterangan', null)->whereDate('created_at', date('Y-m-d'))->count();
        $total_aktifitas_user = Aktifitas::where('user_id', Auth::user()->id??null)->where('keterangan', null)->count();
        $tambah_aktifitas_hari_ini_user = Aktifitas::where('user_id', Auth::user()->id??null)->whereDate('created_at', date('Y-m-d'))->where('keterangan', null)->count();

        return view('dashboard', compact('total_user', 'total_aktifitas', 'tambah_aktifitas_hari_ini', 'total_aktifitas_user', 'tambah_aktifitas_hari_ini_user'));
    }

    public function select(Request $request)
    {
        ComCode::where('code_cd', $request->code_cd)->update([
            'code_nm' => $request->tema
        ]);
    }

    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
