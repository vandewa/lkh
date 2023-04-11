@if (Request::segment(2) == 'create')
<div class="mt-4 col-12">
    <a href="{{ url()->previous() }}" class="px-4 btn btn-danger">Batal</a>
    <button type="submit" class="px-4 btn btn-info">Submit</button>
</div>
@else

<div class="text-right">
    <a href="{{ url()->previous() }}" class="px-4 btn btn-danger">Batal</a>
    <button type="submit" class="px-4 btn btn-info">Update</button>
</div>

@endif