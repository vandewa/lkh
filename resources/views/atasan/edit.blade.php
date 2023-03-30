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
            <div class="mx-auto col-xl-7">
                <hr/>
                <div class="border-0 border-4 border-white card border-top">
                    <div class="p-5 card-body">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="text-white bx bx-list-plus me-1 font-22"></i>
                            </div>
                            <h5 class="mb-0 text-white">Atasan</h5>
                        </div>
                        <hr>
                         {{Form::model($data, ['route' => ['atasan.update', $data->id],'method' => 'put','class' => 'row g-3 mt-2', 'files' => true])}}
                        @include('atasan.form')
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

{!! JsValidator::formRequest('App\Http\Requests\AtasanStoreValidation') !!}
@endpush