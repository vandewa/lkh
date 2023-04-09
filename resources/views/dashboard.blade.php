@extends('layouts.app')
@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            @if(auth()->user()->id == 1 || auth()->user()->id == 2)
            <div class="col">
                <a href="{{ route('user.index') }}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total User</p>
                                    <h4 class="my-1">{{ $total_user }}</h4>
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
            @if(auth()->user()->id == 1 || auth()->user()->id == 2)
            <div class="col">
                <a href="{{ route('aktifitas.index') }}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Aktifitas</p>
                                    <h4 class="my-1">{{ $total_aktifitas }}</h4>
                                    <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>+{{ $tambah_aktifitas_hari_ini }} Hari Ini</p>
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
                                    <h4 class="my-1">{{ $total_aktifitas_user }}</h4>
                                    <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>+{{ $tambah_aktifitas_hari_ini_user }} Hari Ini</p>
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