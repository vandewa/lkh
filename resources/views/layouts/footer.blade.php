{{-- DESKTOP ONLY --}}
<div class="d-none d-md-block">
    <footer class="fixed-bottom" style="background: rgb(0 0 0 / 20%);left: 250px;right: 0;text-align: center;padding: 7px;color: #fff;font-size: 14px;border-top: 1px solid rgb(255 255 255 / 15%);z-index: 3;">
         <p class="mb-0">Copyright © {{ date('Y') }}. Devan Dewananta - Agung Setiawan</p>
    </footer>
</div>

{{-- MOBILE ONLY --}}
@if(Request::segment(1) == 'dashboard')
<div class="d-block d-md-none">
    <footer class="fixed-bottom" style="right: 0; bottom:0;">
        <div class="copyright text-center">
             <p class="mb-0">Copyright © {{ date('Y') }}. Devan Dewananta - Agung Setiawan</p>
        </div>
    </footer>
</div>
@else
<div class="d-block d-md-none">
    <div class="footer-bottom mt-auto">
        <div class="copyright text-center">
             <p class="mb-0">Copyright © {{ date('Y') }}. Devan Dewananta - Agung Setiawan</p>
        </div>
    </div>
</div>
@endif