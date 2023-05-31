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
        $user = User::where('opd_tp', auth()->user()->opd_tp)
        ->count();

        $admin = User::whereHas('roles', function($a){
            $a->whereIn('name', ['superadmin', 'admin-bpbd', 'admin-dpupr']);
        })->count();

        $superadmin = User::count();

        $total_user = $user - $admin;

        $aktifitas_bpbd = Aktifitas::where('keterangan', null)
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_01');
        })
        ->count();

        $aktifitas_dpupr = Aktifitas::where('keterangan', null)
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_02');
        })
        ->count();

        $tambah_aktifitas_hari_ini_bpbd = Aktifitas::where('keterangan', null)
        ->whereDate('created_at', date('Y-m-d'))
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_01');
        })
        ->count();

        $tambah_aktifitas_hari_ini_dpupr = Aktifitas::where('keterangan', null)
        ->whereDate('created_at', date('Y-m-d'))
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_02');
        })
        ->count();

        $total_aktifitas_user_bpbd = Aktifitas::where('user_id', Auth::user()->id??null)
        ->where('keterangan', null)
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_01');
        })
        ->count();

        $total_aktifitas_user_dpupr = Aktifitas::where('user_id', Auth::user()->id??null)
        ->where('keterangan', null)
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_02');
        })
        ->count();
        
        $tambah_aktifitas_hari_ini_user_bpbd = Aktifitas::where('user_id', Auth::user()->id??null)
        ->whereDate('created_at', date('Y-m-d'))
        ->where('keterangan', null)
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_01');
        })
        ->count();

        $tambah_aktifitas_hari_ini_user_dpupr = Aktifitas::where('user_id', Auth::user()->id??null)
        ->whereDate('created_at', date('Y-m-d'))
        ->where('keterangan', null)
        ->whereHas('nama_usernya', function ($a){
            $a->where('opd_tp', 'OPD_TP_02');
        })
        ->count();

        return view('dashboard', compact('total_user', 'aktifitas_bpbd', 'aktifitas_dpupr','tambah_aktifitas_hari_ini_bpbd', 'tambah_aktifitas_hari_ini_dpupr', 'total_aktifitas_user_bpbd', 'total_aktifitas_user_dpupr', 'tambah_aktifitas_hari_ini_user_bpbd', 'tambah_aktifitas_hari_ini_user_dpupr', 'superadmin'));
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
