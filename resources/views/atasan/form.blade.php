<div class="col-md-12">
    <label class="form-label">Nama</label>
    {{Form::text('nama', null, ['class' => 'form-control', 'required' ])}}
</div>
<div class="col-md-12">
    <label class="form-label">NIP</label>
    {{Form::number('nip', null, ['class' => 'form-control', 'required' ])}}
</div>
<div class="col-md-12">
    <label class="form-label">Jabatan</label>
    {{Form::text('jabatan', null, ['class' => 'form-control', 'required' ])}}
</div>

@include('submit')
