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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
   
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     <style>
       <style>
       body {
            margin: 0;
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
        }

        .sticky+.content {
            padding-top: 60px;
        }

    </style>
    </style>
</head>
<body>

    <div id="navbar">
        <nav class="navbar  navbar-expand-md navbar-dark bg-dark shadow-sm " style="height:60px">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav float-start">
                    
                  
              

                  <a href="/adminroute"> Route</a>
                  <a href="/adminbusmanage">Bus</a>
                  <a href="/message">Message</a>
                
              
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
                                    {{ Auth::user()->name }}
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
 <div>
 
  
        <div >
        @yield('content')
        
        
        </div>

    </div>
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
</script>  
</body>
</html>
