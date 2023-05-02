<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="shortcut icon" href="{{ asset('pemda.ico') }}">
    <!--plugins-->
    <link href="{{ asset('dashtrans/vertical/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/css/classic.time.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/css/classic.date.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashtrans/vertical/assets/plugins/select2/css/select2-bootstrap4.css') }}"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="{{ asset('dashtrans/vertical/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
    <!-- loader-->
    <link href="{{ asset('dashtrans/vertical/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('dashtrans/vertical/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('dashtrans/vertical/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashtrans/vertical/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('dashtrans/vertical/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dashtrans/vertical/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @stack('css')

    @vite([])

    <title>e-LKH {{ auth()->user()->nama_opd->code_nm ?? '' }}</title>
</head>

<body class="d-flex flex-column min-vh-100 {{ $tema }} ">
    <!--wrapper-->
    <div class="wrapper">

        @include('layouts.sidebar')
        @include('layouts.topbar')
        @yield('content')
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('layouts.footer')
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <p class="mb-0">Gaussian Texture</p>
            <hr>
            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>
            <hr>
            <p class="mb-0">Gradient Background</p>
            <hr>
            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('dashtrans/vertical/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('dashtrans/vertical/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    {{-- <script src="{{ asset('dashtrans/vertical/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script> --}}
    <script src="{{ asset('dashtrans/vertical/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/legacy.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/picker.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/picker.time.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}">
    </script>
    <script
        src="{{ asset('dashtrans/vertical/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}">
    </script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('dashtrans/vertical/assets/js/ckeditor/build/ckeditor.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Transaction-History').DataTable({
                lengthMenu: [
                    [6, 10, 20, -1],
                    [6, 10, 20, 'Todos']
                ]
            });
        });
    </script>
    <script>
        $('.datepicker').pickadate({
            selectMonths: true,
            selectYears: true,
            format: 'yyyy-mm-dd',
            max: 0
            // formatSubmit: 'yyyy/mm/dd',
        })
    </script>
    <script src="{{ asset('dashtrans/vertical/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('dashtrans/vertical/assets/js/app.js') }}"></script>
    {{-- <script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script> --}}


    <script>
        $(document).on('click', '.delete-data-table', function(a) {
            a.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Apakah kamu ingin menghapus data ini? proses ini tidak dapat dikembalikan.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.value) {
                    a.preventDefault();
                    var url = $(this).attr('href');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: url,
                        method: 'delete',
                        success: function() {
                            Swal.fire(
                                'Dihapus!',
                                'Data berhasil di hapus.',
                                'success'
                            )
                            if (typeof table) {
                                $('#devan').DataTable().ajax.reload();
                            }
                        }
                    })
                }
            })
        });
    </script>
    <script>
        flatpickr("input[type=time]", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
        });
    </script>
    <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil!',
                'Menambahkan data.',
                'success'
            )
        }

        @if (session('store'))
            sweetAlert();
        @endif
    </script>
    <script type="text/javascript">
        function sweetAlert2() {
            Swal.fire(
                'Berhasil!',
                'Mengedit data.',
                'success'
            )
        }

        @if (session('edit'))
            sweetAlert2();
        @endif
    </script>
    <script type="text/javascript">
        function sweetAlert3() {
            Swal.fire({
                icon: 'error',
                title: 'Maaf',
                text: 'Data pada tanggal tsb sudah ada atau tanggal tsb adalah hari libur Anda.',
            })
        }

        @if (session('error'))
            sweetAlert3();
        @endif
    </script>
    <script type="text/javascript">
        function sweetAlert4() {
            Swal.fire({
                icon: 'error',
                title: 'Maaf',
                text: 'Tanggal sudah ada atau Anda sudah input aktifitas di tanggal tsb .',
            })
        }

        @if (session('error-tanggal'))
            sweetAlert4();
        @endif
    </script>
    <script>
        $('.single-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
        $('.multiple-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
    <script>
        $('.datepicker').pickadate({
            selectMonths: true,
            selectYears: true,
            format: 'yyyy-mm-dd',
            // formatSubmit: 'yyyy/mm/dd',
        })
    </script>

    @stack('js')
</body>

</html>
