<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
<div class="col-md-12">
    <label class="form-label">Tanggal</label>
    {{Form::text('tanggal', date('Y-m-d'), ['class' => 'form-control datepicker', 'required' ])}}
</div>
@if (Request::segment(2) == 'create')
<div class="col-md-12">
    <label class="form-label">Nama Aktifitas</label>
    {{Form::select('kegiatan_id[]' ,$aktifitas, null, ['class' => 'form-control multiple-select','required', 'multiple' => 'multiple'])}}
</div>
@else
<div class="col-md-12">
    <label class="form-label">Nama Aktifitas</label>
    {{Form::select('kegiatan_id[]' ,$aktifitas, $lkh, ['class' => 'form-control multiple-select','required', 'multiple' => 'multiple'])}}
</div>
@endif

<div class="col-md-12">
    <label class="form-label">Durasi (*dalam menit)</label>
    <div class="input-group">
        {{Form::number('durasi_menit', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 30' ])}}
        {{-- <div class="input-group-prepend">
            <span class="input-group-text">
                <span>Menit</span>
            </span>
        </div> --}}
    </div>
</div>
<div class="col-md-12">
    <label class="form-label">Deskripsi Aktifitas</label>
    {{Form::textarea('deskripsi', null, ['class' => 'form-control ', 'rows' => 2, 'placeholder' => 'Contoh: Mengikuti rapat koordinasi pelaksanaan Hari Jadi ke-198 Kabupaten Wonosobo Tahun 2023 di Ruang Mangunkusumo Sekretariat Daerah','required' ])}}    
</div>

@if(auth()->user()->id == 1 || auth()->user()->id == 2)
    @include('submit')
@else
    @include('back')
@endif