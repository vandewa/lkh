@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
                <div class="breadcrumb-title pe-3">Aktifitas</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Aktifitas</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4 mb-3 d-flex justify-content-start">
                        @if (auth()->user()->id != 1 && auth()->user()->id != 2)
                            <a href="{{ route('aktifitas.create') }}"><button class="px-5 btn btn-primary radius-30 me-3"><i
                                        class="bx bx-plus-circle me-1"></i>Add Data</button></a>
                        @endif

                        @if (auth()->user()->id == 1 || auth()->user()->id == 2)
                            <a href="{{ route('cetak.lkh') }}"><button class="px-5 btn btn-success radius-30"><i
                                        class="bx bx-printer me-1"></i>Cetak LKH</button></a>
                        @endif
                    </div>
                </div>
            </div>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="devan" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    @if (is_mobile())
                                        <th></th>
                                    @endif
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Aktifitas</th>
                                    <th>Durasi (menit)</th>
                                    <th width="20%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var table = $('#devan').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                "order": [
                    [2, "desc"]
                ],
                columns: [{
                        className: 'dt-control',
                        orderable: false,
                        data: null,
                        defaultContent: '',
                    },
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-left"
                    },
                    {
                        data: 'tanggalnya',
                        name: 'tanggal',
                        defaultContent: '-'
                    },
                    {
                        data: 'nama_usernya.name',
                        name: 'nama_usernya.name',
                        defaultContent: '-'
                    },
                    {
                        data: 'nama_kegiatan',
                        name: 'nama_kegiatan',
                        defaultContent: '-'
                    },
                    {
                        data: 'jam',
                        name: 'jam',
                        defaultContent: '-',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        } else {
            var table = $('#devan').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                "order": [
                    [1, "desc"]
                ],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-left"
                    },
                    {
                        data: 'tanggalnya',
                        name: 'tanggal',
                        defaultContent: '-'
                    },
                    {
                        data: 'nama_usernya.name',
                        name: 'nama_usernya.name',
                        defaultContent: '-'
                    },
                    {
                        data: 'nama_kegiatan',
                        name: 'nama_kegiatan',
                        defaultContent: '-'
                    },
                    {
                        data: 'jam',
                        name: 'jam',
                        defaultContent: '-',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        }

        $('#devan tbody').on('click', 'td.dt-control', function() {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
            }
        });
    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function centang(submenu) {
            var url = "{{ url('sendStatus') }}";
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    id: submenu
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire(
                            'Good job!',
                            'Status is changed',
                            'success'
                        )
                        location.reload();
                    } else {

                    }
                },
                error: function(error) {
                    alert("Error")
                }
            });
        };
    </script>
@endpush
