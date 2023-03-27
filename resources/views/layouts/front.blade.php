<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <title>Website Resmi Sekretariat DPRD Wonosobo</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Website Resmi Sekretariat DPRD Wonosobo" name="description" />
        <meta content="" name="keywords" />
        <meta content="" name="author" />
	    <link rel="shortcut icon" href="{{ asset('bluetech/images/pemda.ico') }}">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
    ================================================== -->
        <link href="{{ asset('bluetech/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/animate.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/zilom.css')}}" rel="stylesheet" type="text/css" />
        {{-- <link href="{{ asset('bluetech/css/zilom-responsive.css')}}" rel="stylesheet" type="text/css" /> --}}
        <link href="{{ asset('bluetech/slick-carousel/slick/slick.js')}}" rel="stylesheet" type="text/css" />

        <!-- color scheme -->
        <link id="colors" href="{{ asset('bluetech/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bluetech/css/coloring.css')}}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/kenwheeler/slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/kenwheeler/slick/slick-theme.css') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/hover-master/css/hover.css')}}">
        <link rel="stylesheet" href="{{ asset('css/entox.css')}}">
        <link rel="stylesheet" href="{{ asset('css/entox-responsive.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://kit.fontawesome.com/bb9305debb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <link href="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
        <link href="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
        <link href="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
	    <link rel="stylesheet" href="{{ asset('dashtrans/vertical/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">


        <style>
            .navbar-nav li:hover > ul.dropdown-menu {
                display: block;
                border-bottom: none;
                border-top: none;
                border-left: none;
                border-right: none;
                -webkit-box-shadow: 2px 2px 20px 0px rgba(20,20,20, 0.3);
                -moz-box-shadow: 2px 2px 20px 0px rgba(20,20,20, 0.3);
                box-shadow: 2px 2px 20px 0px rgba(20,20,20, 0.3);
                padding: 5px 10px;
            }
            .dropdown-submenu {
                position:relative;
            }
            .dropdown-submenu > .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top:-6px;
                visibility: visible;
                opacity: 1;
                border-bottom: none;
                border-top: none;
                border-left: none;
                border-right: none;
                border-radius:5px;
                -webkit-box-shadow: 2px 2px 20px 0px rgba(20,20,20, 0.3);
                -moz-box-shadow: 2px 2px 20px 0px rgba(20,20,20, 0.3);
                box-shadow: 2px 2px 20px 0px rgba(20,20,20, 0.3);
                padding: 5px 10px;
            }
            .dropdown-menu a {
                color: #35404ee1;
	            font-family: "Nunito";
                font-size: 14px;
                letter-spacing: 1px;
                border-radius:5px;
            }

            /* rotate caret on hover */
            .dropdown-menu > li > a:hover:after {
                text-decoration: underline;
                transform: rotate(-90deg);
            } 

            .dropdown-menu > li > a:hover {
                background-image: none;
                background-color: #017DFC;
                color:white;
                padding: 5px 15px;
            }
            
            .help {cursor: help;}

            .de-image-text{
                position: relative;
                overflow: hidden;
            }

            .de-image-text img{
                position: relative;
            }

            .de-image-text:hover img{
                transform: scale(1.05);
            }

            .de-image-text .d-text{
                color: #ffffff;
                position: absolute;
                z-index: 1;
                width: 100%;
                height: 100%;
                padding: 40px;
                background: linear-gradient(0deg, rgba(30,30,30,0) 30%, rgba(30,30,30,1) 100%);
            }

            .de-image-text .d-text h3{
                color: #ffffff;
            }

            .de-image-text:hover{
                -webkit-box-shadow: 0 4px 6px 0 rgba(10,10,10, .2);
                -moz-box-shadow: 0 4px 6px 0 rgba(10,10,10, .2);
                box-shadow: 0 4px 6px 0 rgba(10,10,10, .2);
            }
            
            :root { 
            --peach: #ffad69;
            --white: #ffffff;
            --black: #000;
            --grey : #D3D3D3;
            --facebook: #3b5999;
            --twitter: #55acee;
            --instagram: #e4405f;
            --apple: #131418;
            }

            .sosmed ul {
            position: absolute;
            /* top: 50%; */
            left: 50%;
            transform:translate(-50%, -50%);
            margin: 0;
            padding: 0;
            display: flex;
            }

            .sosmed ul li {
            list-style: none;
            margin: 0 40px;
            }

            .sosmed ul li a .fab{
            font-size: 40px;
            color: black;
            line-height: 80px;
            transition: .5s;
            }

            .sosmed ul li a {
            position: relative;
            display: block;
            width: 80px;
            height: 80px;
            background: #808080;
            text-align: center;
            transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(0,0);
            transition: .5s;
            box-shadow: -30px 30px 10px rgba(0,0,0,.5);
            }

            .sosmed ul li a:before {
            content: '';
            position: absolute;
            top: 10px ;
            left: -20px;
            height: 100%;
            width: 20px;
            background: #93a092;
            transition: .5s;
            transform: rotate(0deg) skewY(-45deg);
            }

            .sosmed ul li a:after {
            content: '';
            position: absolute;
            bottom: -20px ;
            left: -10px;
            height: 20px;
            width: 100%;
            background: var(--grey);
            transition: .5s;
            transform: rotate(0deg) skewX(-45deg);
            }

            .sosmed ul li a:hover{
            transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px,-20px);
            box-shadow: -50px 50px 50px rgba(0,0,0,.5);
            }
            .sosmed ul li:hover .fab{
            color:white;
            }


            .sosmed ul li:hover:nth-child(1) a {
            background: var(--facebook);
            }

            .sosmed ul li:hover:nth-child(1) a:before {
            background: #5E77AB;
            }

            .sosmed ul li:hover:nth-child(1) a:after {
            background: #4C68A2;
            }

            .sosmed ul li:hover:nth-child(3) a {
            background: var(--twitter);
            }

            .sosmed ul li:hover:nth-child(3) a:before {
            background: #64B2EE;
            }

            .sosmed ul li:hover:nth-child(3) a:after{
            background: #73BAF0;
            }

            .sosmed ul li:hover:nth-child(2) a {
            background: var(--instagram);
            }

            .sosmed ul li:hover:nth-child(2) a:before {
            background: #E4506B;
            }

            .sosmed ul li:hover:nth-child(2) a:after{
            background: #E7617A;
            }

            .sosmed ul li:hover:nth-child(4) a {
            background: var(--apple);
            }

            .sosmed ul li:hover:nth-child(4) a:before {
            background: #171717;
            }

            .sosmed ul li:hover:nth-child(4) a:after{
            background: #2E2E2E;
            }

            body {
            position: relative;
            margin: 0;
            padding-bottom: 15rem;
            min-height: 100%;
            /* font-family: "Helvetica Neue", Arial, sans-serif; */
            }

            html {
            height: 100%;
            box-sizing: border-box;
            }

            .transition-zoom-hover {
            -webkit-transform: scale(1);
                    transform: scale(1);
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
            }

            .transition-zoom-hover:hover, .transition-zoom-hover:focus {
            -webkit-transform: scale(1.05);
                    transform: scale(1.05);
            }

        </style>

        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>       
        @stack('css')

    @vite([])

    </head>


    <body class="d-flex flex-column min-vh-100" id="body">
        <div id="wrapper">
            @if (is_mobile())
            <header class="transparent scroll-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between">
                                <div class="align-self-center header-col-left">
                                     <!-- logo begin -->
                                     <div id="logo">
                                        <a href="{{ route('home') }}">
                                            <img alt="" src="{{ asset('bluetech/images/logo.png') }}" width="70%" style="margin-top: 20px;"/>
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="align-self-center ml-auto header-col-mid">
                                    <!-- mainmenu begin -->
                                    <ul id="mainmenu">
                                        <li>
                                            <a href="{{ route('home') }}">Beranda</a>
                                        </li>
                                        @foreach ($menus as $menu)
                                            @if(count($menu->childs)) 
                                            <li>
                                                <a href="#">{{ $menu->nama }}</a>
                                                <ul>
                                                    @foreach ($menu->childs as $child1)
                                                        @if(count($child1->childs))
                                                            <li>
                                                                <a href="#">{{ $child1->nama }}</a>
                                                                <ul>
                                                                    @foreach ($child1->childs as $child2)
                                                                        @if(count($child2->childs)) 
                                                                            <li>
                                                                                <a href="#">{{ $child2->nama }}</a>
                                                                                <ul style="height: auto !important;">
                                                                                    @foreach ($child2->childs as $child3)
                                                                                            @if(count($child3->childs))
                                                                                            <li>
                                                                                                <a href="#">{{ $child3->nama }}</a>
                                                                                            </li>
                                                                                        @else
                                                                                            @if ($child3->jenis_st == 'JENIS_MENU_ST_01')
                                                                                                <li>
                                                                                                    <a href="{{$child3->preview_image}}" target="_blank">{{ $child3->nama }}</a>
                                                                                                </li>
                                                                                            @else
                                                                                                <li>
                                                                                                    <a href="{{ url('page/'.$child3->slug) }}">{{ $child3->nama }}</a>
                                                                                                </li>
                                                                                            @endif
                                                                                        @endif 
                                                                                    @endforeach
                                                                                </ul>
                                                                            </li>
                                                                        @else
                                                                            @if ($child2->jenis_st == 'JENIS_MENU_ST_01')
                                                                                <li>
                                                                                    <a href="{{$child2->preview_image}}" target="_blank">{{ $child2->nama }}</a>
                                                                                </li>
                                                                            @else
                                                                                <li>
                                                                                    <a href="{{ url('page/'.$child2->slug) }}">{{ $child2->nama }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endif 
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @else
                                                            @if ($child1->jenis_st == 'JENIS_MENU_ST_01')
                                                                <li>
                                                                    <a href="{{$child1->preview_image}}" target="_blank">{{ $child1->nama }}</a>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{{ url('page/'.$child1->slug) }}">{{ $child1->nama }}</a>
                                                                </li>
                                                            @endif
                                                        @endif 
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @else
                                            <li>
                                                <a href="{{ url('page/'.$menu->slug) }}">{{ $menu->nama }}</a>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="align-self-center ml-auto header-col-right">
                                    <span id="menu-btn"></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @else
            <header class="header-light transparent scroll-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <div class="align-self-center header-col-left">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('home') }}">
                                            <img alt="" src="{{ asset('bluetech/images/logo.png') }}" width="70%" style="margin-top: 20px;"/>
                                        </a>
                                    </div>
                                    <!-- logo close --> 
                                </div>
                            
                                <div class="align-self-center ml-auto header-col-mid">
                                    <!-- mainmenu begin -->
                                    <nav class="navbar navbar-expand-md navbar-light bg-transparent mt-3">
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav">
                                                <li class="nav-item mr-2">
                                                    <b><a class="nav-link" href="{{ route('home') }}">Beranda <span class="sr-only"></span></a></b>
                                                </li>
                                                @foreach ($menus as $menu)
                                            
                                                @if(count($menu->childs)) 
                                                    <li class="nav-item dropdown">
                                                @else
                                                    <li class="nav-item mr-2">
                                                @endif
                                            
                                                @if(count($menu->childs)) 
                                                <b>
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ $menu->nama }} </a>
                                                </b>
                                                @else 
                                                <b>
                                                    <a class="nav-link" href="{{ url('page/'.$menu->slug) }}">{{ $menu->nama }} <span class="sr-only"></span></a>
                                                </b>
                                                @endif
            
                                                    @if(count($menu->childs)) 
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                        @foreach ($menu->childs as $child1)
                                                            @if(count($child1->childs)) 
                                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{ $child1->nama }}</a>
                                                                    <ul class="dropdown-menu">
                                                                        @foreach ($child1->childs as $child2)
                                                                            @if(count($child2->childs)) 
                                                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{ $child2->nama }}</a>
                                                                                    <ul class="dropdown-menu">
                                                                                        @foreach ($child2->childs as $child3)
                                                                                            @if(count($child3->childs))
                                                                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{ $child3->nama }}</a>
                                                                                                    <ul class="dropdown-menu">
                                                                                                        @foreach ($child3->childs as $child4)
                                                                                                            @if(count($child4->childs))
                                                                                                            
                                                                                                            @else
                                                                                                                <li><a class="dropdown-item" href="#">{{ $child4->nama }}</a></li>
                                                                                                            @endif
                                                                                                        @endforeach
                                                                                                    </ul>
                                                                                                </li>
                                                                                            @else
                                                                                                @if ($child3->jenis_st == 'JENIS_MENU_ST_01')
                                                                                                    <li><a class="dropdown-item" href="{{$child3->preview_image}}" target="_blank">{{ $child3->nama }}</a></li>
                                                                                                @else
                                                                                                    <li><a class="dropdown-item" href="{{ url('page/'.$child3->slug) }}">{{ $child3->nama }}</a></li>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            @else
                                                                                @if ($child2->jenis_st == 'JENIS_MENU_ST_01')
                                                                                    <li><a class="dropdown-item" href="{{$child2->preview_image}}" target="_blank">{{ $child2->nama }}</a></li>
                                                                                @else
                                                                                    <li><a class="dropdown-item" href="{{ url('page/'.$child2->slug) }}">{{ $child2->nama }}</a></li>
                                                                                @endif
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @else
                                                                @if ($child1->jenis_st == 'JENIS_MENU_ST_01')
                                                                    <li><a class="dropdown-item" href="{{$child1->preview_image}}" target="_blank">{{ $child1->nama }}</a></li>
                                                                @else
                                                                    <li><a class="dropdown-item" href="{{ url('page/'.$child1->slug) }}">{{ $child1->nama }}</a></li>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </nav>
                                    
                                </div>
                            
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @endif
            
            @yield('content')

            @include('layouts.footer-front')
           

            <div id="preloader">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>


        <!-- Javascript Files
            ================================================== -->
        <script src="{{ asset('bluetech/js/jquery.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/wow.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/jquery.isotope.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/slick-carousel/slick/slick.js')}}"></script>
        <script src="{{ asset('bluetech/js/easing.js')}}"></script>
        <script src="{{ asset('bluetech/js/owl.carousel.js')}}"></script>
        <script src="{{ asset('bluetech/js/validation.js')}}"></script>
        <script src="{{ asset('bluetech/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/enquire.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/jquery.stellar.min.js')}}"></script>
        <script src="{{ asset('bluetech/js/jquery.plugin.js')}}"></script>
        <script src="{{ asset('bluetech/js/typed.js')}}"></script>
        <script src="{{ asset('bluetech/js/jquery.countTo.js')}}"></script>
        <script src="{{ asset('bluetech/js/jquery.countdown.js')}}"></script>
        <script src="{{ asset('bluetech/js/designesia.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="{{ asset('js/entox.js') }}"></script>


        <script>
            var typed = new Typed(".auto-type", {
              strings: ["Sekretariat DPRD Kabupaten Wonosobo."],
              typeSpeed: 150,
              backSpeed: 150,
              loop: true,
            });
        </script>
        <script type="text/javascript" src="{{ asset('vendor/kenwheeler/slick/slick.min.js') }}"></script>
      
        <script type="text/javascript">
            $(document).ready(function(){
              $('.your-class').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000
              });
            });
        </script>

        <script type="text/javascript">
            function sweetAlert2() 
            {  
                Swal.fire(
                'Berhasil!',
                'Pesan telah dikirim.',
                'success'
                )
            }

            @if(session('pesan'))
            sweetAlert2();
            @endif
        </script>

        <script type="text/javascript">
            function sweetAlert3() 
            {  
                Swal.fire(
                'Berhasil!',
                'Data telah dikirim.',
                'success'
                )
            }

            @if(session('store'))
            sweetAlert3();
            @endif
        </script>


        <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/legacy.js')}}"></script>
        <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/picker.js')}}"></script>
        <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
        <script src="{{ asset('dashtrans/vertical/assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
        <script src="{{ asset('dashtrans/vertical/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
        <script src="{{ asset('dashtrans/vertical/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>


        	<script>
                $('.datepicker').pickadate({
                    selectMonths: true,
                    selectYears: true,
                    format: 'yyyy-mm-dd',
                    // formatSubmit: 'yyyy/mm/dd',
                })
            </script>

        @stack('js')
    
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=ZBvnxdtj"></script>
        <script>
            $(document).ready(function () {
              responsiveVoice.speak(
                        "Selamat datang di website resmi sekretariat dprd kabupaten wonosobo",
                        "Indonesian Male",
                        {
                            pitch: 1,
                            rate: 1,
                            volume: 1
                        }
                    );               
        
            });
        </script>
        <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "CkHS9uvObK");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>



    </body>
</html>
