<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('dashtrans/vertical/assets/images/logo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ auth()->user()->nama_opd->code_nm??'' }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ Request::segment(1) == 'dashboard' ? 'mm-active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="{{ Request::segment(1) == 'aktifitas' ? 'mm-active' : '' }}">
            <a href="{{ route('aktifitas.index') }}">
                <div class="parent-icon"><i class='bx bx-list-plus'></i>
                </div>
                <div class="menu-title">Aktifitas</div>
            </a>
        </li>
        <li class="{{ Request::segment(1) == 'tanggal-libur' ? 'mm-active' : '' }}">
            <a href="{{ route('tanggal-libur.index') }}">
                <div class="parent-icon"><i class='bx bx-calendar-x'></i>
                </div>
                <div class="menu-title">Tanggal Libur</div>
            </a>
        </li>
        @if(auth()->user()->id == 1 || auth()->user()->id == 2)
        <li class="{{ Request::segment(1) == 'user' ? 'mm-active' : '' }}">
            <a href="{{ route('user.index') }}">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">User</div>
            </a>
        </li>
        @endif

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->