<div class="col-md-6">
    <label class="form-label">Nama</label>
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama', 'required']) }}
</div>
<div class="col-6">
    <label class="form-label">Email</label>
    {{ Form::email('email', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan Email', 'required']) }}
</div>

@if (auth()->user()->opd_tp == 'OPD_TP_02')
    <div class="col-md-6">
        <label class="form-label">Tempat Tanggal Lahir</label>
        {{ Form::textarea('tempat_dan_tanggal_lahir', null, ['class' => 'form-control ', 'rows' => 2, 'required']) }}

    </div>
@else
    <div class="col-md-6">
        <label class="form-label">Tempat Lahir</label>
        {{ Form::select('tempat_lahir_tp', get_code_group('TEMPAT_LAHIR_TP'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih -', 'required']) }}
    </div>
    <div class="col-md-6">
        <label class="form-label">Tanggal Lahir</label>
        {{ Form::text('tanggal_lahir', date('Y-m-d'), ['class' => 'form-control datepicker', 'required']) }}
    </div>
@endif

<div class="col-6">
    <label class="form-label">Alamat</label>
    {{ Form::textarea('alamat', null, ['class' => 'form-control ', 'rows' => 2, 'required']) }}
</div>
<div class="col-6">
    <label class="form-label">Nomor</label>
    {{ Form::number('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan Nomor WA', 'required']) }}
</div>

@if (auth()->user()->opd_tp == 'OPD_TP_02')
    <div class="col-md-6">
        <label class="form-label">Jabatan</label>
        {{ Form::select('jabatan_tp', get_code_group('JABATAN_DPUPR_TP'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih -', 'required']) }}
    </div>
@else
    <div class="col-md-6">
        <label class="form-label">Jabatan</label>
        {{ Form::select('jabatan_tp', get_code_group('JABATAN_TP'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih -', 'required']) }}
    </div>
@endif

@if (auth()->user()->id == 1)
    <div class="col-md-6">
        <label class="form-label">OPD</label>
        {{ Form::select('opd_tp', get_code_group('OPD_TP'), null, ['class' => 'form-control', 'placeholder' => '- Pilih -', 'required']) }}
    </div>
    <div class="col-md-6">
        <label class="form-label">Atasan</label>
        {{ Form::select('atasan_id', $atasan, null, ['class' => 'form-control', 'placeholder' => '- Pilih -', 'required']) }}
    </div>
@else
    <input type="hidden" name="opd_tp" value="{{ auth()->user()->opd_tp }}">
    <div class="col-md-6">
        <label class="form-label">Atasan</label>
        {{ Form::select('atasan_id', $atasan, null, ['class' => 'form-control ', 'placeholder' => '- Pilih -', 'required']) }}
    </div>
@endif

<div class="col-12">
    <label class="form-label">Password</label>
    {{ Form::password('password', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan Password', 'required']) }}
</div>
<div class="col-12">
    <label class="form-label">Konfirmasi Password</label>
    {{ Form::password('password_confirmation', null, ['class' => 'form-control ', 'placeholder' => 'Konfirmasi Password', 'required']) }}
</div>

@include('submit')
