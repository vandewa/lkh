@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tanggal Libur</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tanggal Libur</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 mt-4 d-flex justify-content-start">
                    <a class="btn btn-primary px-5 radius-30 me-3" type="button" data-bs-toggle="modal" data-bs-target="#libur"><i class="bx bx-plus-circle me-1"></i><span>Add Data</span></a>
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
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
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
<!-- Modal -->
<div class="modal fade" id="libur" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tanggal Libur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{Form::open(['route' => 'tanggal-libur.store','method' => 'post', 'class' => 'row g-3 mt-2', 'files' => true])}}
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="keterangan" value="Libur">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    {{Form::text('tanggal', date('Y-m-d'), ['class' => 'form-control datepicker', 'required' ])}}
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
@endsection
@push('js')

<script type="text/javascript">		
    var table = $('#devan').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 1, "desc" ]],
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
            { data: 'tanggalnya', name: 'tanggal', defaultContent: '-' },
            { data: 'nama_usernya.name', name: 'nama_usernya.name', defaultContent: '-' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
</script>

{!! JsValidator::formRequest('App\Http\Requests\TanggalLiburStoreValidation') !!}

@endpush
