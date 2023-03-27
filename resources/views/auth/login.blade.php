<!doctype html>
<html lang="en">
<head>
	<base href="./">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Sistem Informasi Laporan Kegiatan Harian">
	<meta name="author" content="Diskominfo Wonosobo">
	<meta name="keyword" content="Sistem Informasi Laporan Kegiatan Harian">
	<link rel="shortcut icon" href="{{ asset('pemda.ico') }}">
	<title>Login e-LKH (Laporan Kegiatan Harian)</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body class="img js-fullheight" style="background-image:url({{ asset('bg.jpg') }});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-0 mt-4">
					<img src="https://www.simok.wonosobokab.go.id/image/pemda.png" style="width: 80px;">
					<h2 class="heading-section">
						<span style="margin-left: 10px; font-weight: bold; font-family: 'Teko', sans-serif; color: #ffffff; font-size: 40pt">e-LKH</span>
					</h2>
					<span style="margin-left: 10px; font-weight: normal; font-family: 'Teko', sans-serif; color: #ffffff; font-size: 20pt">( Laporan Kegiatan Harian )</span>	
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h6 class="mb-4 text-center" style="color: #ffffff;">Masukkan Email dan Password Anda</h6>
						<form action="{{ route('login') }}" class="signin-form" id="flogin" onsubmit="return lsogin();" method="post" accept-charset="utf-8">
							 @csrf
							 
							 <x-validation-errors class="mb-4" />

							@if (session('status'))
								<div class="mb-4 font-medium text-sm text-green-600">
									{{ session('status') }}
								</div>
							@endif

							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" id="flogin_username" autofocus required>
							</div>
							<div class="form-group">
								<input name="password" placeholder="Password" id="flogin_password" type="password" class="form-control" required>
								<span toggle="#flogin_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn submit px-3" id="flogin_tb_ok" style="background-color: rgb(51, 88, 244) !important;
								background-image: linear-gradient(to left bottom, rgb(29, 140, 248), rgb(51, 88, 244), rgb(29, 140, 248)) !important;
								background-size: 210% 210%;
								background-position: 100% 0;
								transition: all .15s ease;
								box-shadow: none;
								color: #fff;"><b>Login</b></button>
							</div>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="{{ asset('jquery.min.js') }}"></script>

	<script>
		$(function(){
			$(".alert").delay(3000).slideUp(300);
		});
	</script>
    <script type="text/javascript">
		(function ($) {
				"use strict";
				var fullHeight = function () {
					$('.js-fullheight').css('height', $(window).height());
					// $(window).resize(function () {
					// 	$('.js-fullheight').css('height', $(window).height());
					// });
				};
				fullHeight();
				$(".toggle-password").click(function () {
					$(this).toggleClass("fa-eye fa-eye-slash");
					var input = $($(this).attr("toggle"));
					if (input.attr("type") == "password") {
						input.attr("type", "text");
					} else {
						input.attr("type", "password");
					}
				});
		})(jQuery);
	</script>
</body>
</html>