@extends('layouts.app')
@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            @if(auth()->user()->hasRole(['superadmin', 'admin-bpbd', 'admin-dpupr']))
            <div class="col">
                <a href="{{ route('user.index') }}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total User</p>
                                    @if(auth()->user()->hasRole(['admin-bpbd', 'admin-dpupr']))
                                    <h4 class="my-1">{{ $total_user }}</h4>
                                    @elseif(auth()->user()->hasRole(['superadmin']))
                                    <h4 class="my-1">{{ $superadmin }}</h4>
                                    @endif
                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bx-user'></i>
                                </div>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(auth()->user()->hasRole(['superadmin', 'admin-bpbd', 'admin-dpupr']))
            <div class="col">
                <a href="{{ route('aktifitas.index') }}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Aktifitas</p>
                                    @if (auth()->user()->hasRole('admin-bpbd'))
                                    <h4 class="my-1">{{ $aktifitas_bpbd }}</h4>
                                    @elseif (auth()->user()->hasRole('admin-dpupr'))
                                    <h4 class="my-1">{{ $aktifitas_dpupr }}</h4>
                                    @else
                                    <h4 class="my-1">{{ $aktifitas_dpupr + $aktifitas_bpbd }}</h4>
                                    @endif
                                    <p class="mb-0 font-13"><i class='align-middle bx bxs-up-arrow'></i>+
                                        @if (auth()->user()->hasRole('admin-bpbd'))
                                        {{ $tambah_aktifitas_hari_ini_bpbd }} 
                                        @elseif (auth()->user()->hasRole('admin-dpupr'))
                                        {{ $tambah_aktifitas_hari_ini_dpupr }} 
                                        @else
                                        {{ $tambah_aktifitas_hari_ini_dpupr + $tambah_aktifitas_hari_ini_bpbd}} 
                                        @endif
                                        Hari Ini
                                    </p>
                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bx-list-ol'></i>
                                </div>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </a>
            </div>
            @else
            <div class="col">
                <a href="{{ route('aktifitas.index') }}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Aktifitas</p>
                                    @if(auth()->user()->opd_tp == 'OPD_TP_01')
                                    <h4 class="my-1">{{ $total_aktifitas_user_bpbd }}</h4>
                                    @elseif(auth()->user()->opd_tp == 'OPD_TP_02')
                                    <h4 class="my-1">{{ $total_aktifitas_user_dpupr }}</h4>
                                    @endif
                                    <p class="mb-0 font-13"><i class='align-middle bx bxs-up-arrow'></i>+
                                        @if(auth()->user()->opd_tp == 'OPD_TP_01')
                                        {{ $tambah_aktifitas_hari_ini_user_bpbd }} 
                                        @elseif(auth()->user()->opd_tp == 'OPD_TP_02')
                                        {{ $tambah_aktifitas_hari_ini_user_dpupr }} 
                                        @endif
                                        Hari Ini
                                    </p>
                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bx-list-ol'></i>
                                </div>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection