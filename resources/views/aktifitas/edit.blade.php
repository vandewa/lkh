@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Aktifitas</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Aktifitas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-7 mx-auto">
                <hr/>
                <div class="card border-top border-0 border-4 border-white">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bx-list-plus me-1 font-22 text-white"></i>
                            </div>
                            <h5 class="mb-0 text-white">Aktifitas</h5>
                        </div>
                        <hr>
                         {{Form::model($data, ['route' => ['aktifitas.update', $data->id],'method' => 'put','class' => 'row g-3 mt-2', 'files' => true])}}
                        @include('aktifitas.form')
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

{!! JsValidator::formRequest('App\Http\Requests\AktifitasStoreValidation') !!}
@endpush