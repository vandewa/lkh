@if (Request::segment(2) == 'create')
<div class="col-12 mt-4">
    <button type="submit" class="btn btn-light px-5">Submit</button>
</div>
@else
<div class="col-12 mt-4">
    <button type="submit" class="btn btn-light px-5">Update</button>
</div>
@endif