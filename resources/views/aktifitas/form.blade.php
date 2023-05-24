<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

<div class="col-md-12">
    <label class="form-label">Tanggal</label>
    {{ Form::text('tanggal', date('Y-m-d'), ['class' => 'form-control datepicker', 'required']) }}
</div>
@if (Request::segment(2) == 'create')
    @if (Auth::user()->opd_tp == 'OPD_TP_01')
        <div class="col-md-12">
            <label class="form-label">Nama Aktifitas</label>
            {{ Form::select('kegiatan_id[]', $aktifitas, null, ['class' => 'form-control multiple-select', 'required', 'multiple' => 'multiple']) }}
        </div>
    @endif
@else
    @if (Auth::user()->opd_tp == 'OPD_TP_01')
        <div class="col-md-12">
            <label class="form-label">Nama Aktifitas</label>
            {{ Form::select('kegiatan_id[]', $aktifitas, $lkh, ['class' => 'form-control multiple-select', 'required', 'multiple' => 'multiple']) }}
        </div>
    @endif
@endif

@if (Auth::user()->opd_tp == 'OPD_TP_02')
    <div class="col-md-6">
        <label class="form-label">Dari</label>
        <div class="input-group">
            {{ Form::time('waktu_mulai', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-6">
        <label class="form-label">Sampai</label>
        <div class="input-group">
            {{ Form::time('waktu_selesai', null, ['class' => 'form-control']) }}
        </div>
    </div>
@endif

@if (Auth::user()->opd_tp == 'OPD_TP_01')
    <div class="col-md-12">
        <label class="form-label">Durasi (*dalam menit)</label>
        <div class="input-group">
            {{ Form::number('durasi_menit', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 30']) }}
        </div>
    </div>
@endif

<div class="col-md-12">
    <label class="form-label">Deskripsi Aktifitas</label>
    {{ Form::textarea('deskripsi', null, ['class' => 'form-control ', 'rows' => 4, 'placeholder' => 'Contoh: Mengikuti rapat koordinasi pelaksanaan Hari Jadi ke-198 Kabupaten Wonosobo Tahun 2023 di Ruang Mangunkusumo Sekretariat Daerah', 'required']) }}
</div>

@if (auth()->user()->hasRole(['superadmin', 'admin-bpbd', 'admin-dpupr']))
    @include('back')
@else
    @include('submit')
@endif
