<input type="hidden" name="opd_tp" value="{{ Auth::user()->opd_tp }}">
<div class="col-md-12">
    <label class="form-label">Nama</label>
    {{ Form::text('nama', null, ['class' => 'form-control', 'required']) }}
</div>
<div class="col-md-12">
    <label class="form-label">NIP</label>
    {{ Form::number('nip', null, ['class' => 'form-control', 'required']) }}
</div>
<div class="col-md-12">
    <label class="form-label">Jabatan</label>
    {{ Form::text('jabatan', null, ['class' => 'form-control', 'required']) }}
</div>

@if (Auth::user()->opd_tp == 'OPD_TP_02' || Auth::user()->opd_tp == null)
    <div class="col-md-12">
        <label class="form-label">Bidang</label>
        {{ Form::text('bidang', null, ['class' => 'form-control', 'required']) }}
    </div>
@endif
@include('submit')
