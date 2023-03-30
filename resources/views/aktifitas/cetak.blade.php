@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Cetak Laporan Kegiatan Harian</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cetak Laporan Kegiatan Harian</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="mx-auto col-xl-7">
                <hr/>
                <div class="border-0 border-4 border-white card border-top">
                    <div class="p-5 card-body">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="text-white bx bx-printer me-1 font-22"></i>
                            </div>
                            <h5 class="mb-0 text-white">Cetak Laporan Kegiatan Harian</h5>
                        </div>
                        <hr>
                        {{Form::open(['route' => 'store.cetak.lkh','method' => 'post', 'class' => 'row g-3 mt-2', 'files' => true, 'id' => 'my-form'])}}
                        <div class="modal-body">
                           <div class="mb-3 col-md-12">
                                <label class="form-label">Nama</label>
                                {{Form::select('user_id' ,$user, null, ['class' => 'form-control single-select','placeholder' => '- Pilih Nama -', 'required'])}}
                            </div>
                           <div class="mb-3 col-md-12">
                                <label class="form-label">Tahun</label>
                                {{Form::select('tahun' ,$tahun, null, ['class' => 'form-control single-select','placeholder' => '- Pilih Tahun -', 'required'])}}
                            </div>
                           <div class="mb-3 col-md-12">
                                <label class="form-label">Bulan</label>
                                {{Form::select('bulan' ,$bulan, null, ['class' => 'form-control single-select','placeholder' => '- Pilih Bulan -', 'required'])}}
                            </div>
                           <div class="mb-3 col-md-12">
                                <label class="form-label">Tanggal Pengesahan</label>
                                {{Form::text('tanggal', date('Y-m-d'), ['class' => 'form-control datepicker', 'required' ])}}
                            </div>
                        </div>
                        <div class="mt-4 col-12">
                            <button type="submit" class="px-5 btn btn-light">Submit</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<!-- Javascript Requirements -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\CetakLkhValidation') !!}
@endpush