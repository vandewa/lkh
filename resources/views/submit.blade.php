@if (Request::segment(2) == 'create')
<div class="mt-4 col-12">
    <a href="{{ url()->previous() }}"  class="px-5 btn btn-danger">Batal</a>
    <button type="submit" class="px-5 btn btn-light">Submit</button>
</div>
@else
<div class="mt-4 col-12">
    <a href="{{ url()->previous() }}"  class="px-5 btn btn-danger">Batal</a>
    <button type="submit" class="px-5 btn btn-light">Update</button>
</div>
@endif