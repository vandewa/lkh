<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    {{-- <li class="nav-item mobile-search-icon">
                        <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown dropdown-large">
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">Notifications</p>
                                    <p class="msg-header-clear ms-auto">Marks all as read</p>
                                </div>
                            </a>
                            <div class="header-notifications-list">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-message-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="{{ asset('dashtrans/vertical/assets/images/avatars/avatar-1.png')}}" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                        ago</span></h6>
                                            <p class="msg-info">The standard chunk of lorem</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">View All Messages</div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('dashtrans/vertical/assets/images/logo.png')}}" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ auth()->user()->name??'' }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal1"><i class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal"><i class="bx bx-cog"></i>
                           Ganti Password
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->

<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ganti Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{Form::open(['route' => 'ganti.password','method' => 'post', 'class' => 'row g-3 mt-2', 'files' => true, 'id' => 'my-forms'])}}
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Password Baru</label>
                    {{Form::password('password', null, ['class' => 'form-control' ])}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    {{Form::password('password_confirmation', null, ['class' => 'form-control' ])}}
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            {{Form::close()}}
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{Form::open(['route' => 'edit.profile','method' => 'post', 'class' => 'row g-3 mt-2', 'files' => true, 'id' => 'my-form'])}}
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    {{Form::text('name', auth()->user()->name, ['class' => 'form-control' ])}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    {{Form::email('email', auth()->user()->email, ['class' => 'form-control' ])}}
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            {{Form::close()}}
        </div>
    </div>
</div>

@push('js')
{{-- {!! JsValidator::formRequest('App\Http\Requests\PasswordValidation','#my-forms') !!} --}}
@endpush