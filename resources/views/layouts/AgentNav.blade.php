<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/jquery.seat-charts.css') }}">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src=" {{ asset('js/jquery.seat-charts.js') }}"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

     <style>
       body {

            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {

            background-image: url({{asset('nav.jpg')}});
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 30px 20px;
            text-align: center;
            color: rgb(25, 238, 220);
        }

        .header:hover{
            transform: scale(1.2);
            transition-duration: 1s;

        }

        #header{
            animation: header-animation 2s infinite 2s;

        }

        @keyframes header-animation {
            from {zoom: 2px;}
            to {zoom: 1;}
          }

        #navbar {
            overflow: hidden;
            background-color: rgba(44, 6, 131, 0.815);
        }

        #navbar a {
            float: left;
            display: block;
            color: #f8fc0a;
            text-align: center;
            padding: 1px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #navbar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .content {

            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .sticky+.content {
            padding-top: 60px;
            z-index: 1000;
        }





    </style>
</head>
<body>
<div class="header" >
        <div class="container ">
        <div class="row my-20">
                <div class="col-lg-1 col-md-4 mb-2 mb-md-0  ">
                    <img src="{{asset('logo.png')}}" height="110" alt="Logo"
                        loading="lazy" />
                </div>
                <div class="col-lg-10 col-md-6 mb-2 mb-md-0 " style="color:white;">
                <h1><b>SRI LANKA EXPRESSWAY BUS</b></h1>
        <h2><b>Seat Booking System</b></h2>
                </div>
        </div>
        </div>
</div>
    <div id="navbar">
        <nav class="navbar  navbar-expand-md navbar-dark bg-dark shadow-sm " style="height:60px">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <a  href="/">Home</a>
                    <a href="/g">FAQ</a>
                    <a href="/b">About Us</a>
                    <a href="javascript:void(0)">Contact Us</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <!-- <li class="nav-item dropdown"> -->
                                <a id=""  role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello.. {{ Auth::user()->name }} Welcome to SLEB
                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            <!-- </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 </div>


    <div class="row " >
        <div class="col-2 bg-dark  overflow-hidden" >
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-blue text-decoration-none">
                    <span class="fs-4 d-none d-sm-inline text-uppercase">Dashboard </span>
                </a>
                <a href="/addbus/{{ Auth::user()->id }}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-6 d-none d-sm-inline text-uppercase">Add New Bus  </span>
                </a>
                <a href="/addbusroute/{{ Auth::user()->id }}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-6 d-none d-sm-inline text-uppercase">Add New Schedule </span>
                </a>
                <a href="/viewshedule/{{ Auth::user()->id }}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-6 d-none d-sm-inline text-uppercase">View bus schedule </span>
                </a>





            </div>
        </div>

        <div class=" col-10 vh-100  overflow-auto">
                <div >
                @yield('content')
                </div>
                <div>
                @include('layouts.footer')
                </div>

        </div>



<script>
       window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

        var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);
</script>
</body>
</html>
