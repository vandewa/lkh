@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Atasan</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Atasan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-12">
                <div class="mt-4 mb-3 d-flex justify-content-start">
                    <a href="{{ route('atasan.create') }}"><button class="px-5 btn btn-primary radius-30 me-3"><i class="bx bx-plus-circle me-1"></i>Add Data</button></a>
                </div>
            </div>
        </div> 
        <hr/>
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
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th width="15%;">Aksi</th>
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
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    var table = $('#devan').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 2, "desc" ]],
        columns: [
            { className: 'dt-control', orderable: false, data: null,defaultContent: '', },
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
            { data: 'nama', name: 'nama', defaultContent: '-' },
            { data: 'nip', name: 'nip', defaultContent: '-' },
            { data: 'jabatan', name: 'jabatan', defaultContent: '-' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
} else {
    var table = $('#devan').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 1, "desc" ]],
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
            { data: 'nama', name: 'nama', defaultContent: '-' },
            { data: 'nip', name: 'nip', defaultContent: '-' },
            { data: 'jabatan', name: 'jabatan', defaultContent: '-' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
}	
    
    $('#devan tbody').on('click', 'td.dt-control', function () {
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
            success: function (response) {
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
            error: function (error) {
                alert("Error")
            }
        });
    };
</script>
@endpush

@push('css')
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
td.dt-control {
  background: url("https://www.datatables.net/examples/resources/details_open.png") no-repeat center center;
  cursor: pointer;
}
 
tr.dt-hasChild td.dt-control {
  background: url("https://www.datatables.net/examples/resources/details_close.png") no-repeat center center;
}
</style>

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> --}}

@endpush

