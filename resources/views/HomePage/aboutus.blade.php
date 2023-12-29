<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/jquery.seat-charts.css') }}">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <script src=" {{ asset('js/jquery.seat-charts.js') }}"></script>

     <!--Linking fontawesome file with html-->
     <link rel="stylesheet" href="css1/fontawesome/css/font-awesome.min.css">

<!--Linking bootstrap file to html-->
<link rel="stylesheet" href="css1/bootstrap/bootstrap.css">

<!--Linking the css file to html-->
<link rel="stylesheet" href="css1/style/style.css">
    <title>Document</title>
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
            z-index: 555;
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

        .abc{
            background-color: #ECECEC;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 10px ;
            height: 850px;
        }

        
    </style>
</head>
<body>
    <div class="header" >
        <div class="container p-20">
        <div class="row my-20">
        <div class="col-lg-1 col-md-4 mb-2 mb-md-0 ">
            <img src="{{asset('logo.png')}}" height="110" alt="Logo" 
                 loading="lazy" />
        </div>
        <div class="col-lg-10 col-md-6 mb-2 mb-md-0 " style="color:white;">
        <h1 ><b>SRI LANKA EXPRESSWAY BUS</b></h1>
        <h2><b>Seat Booking System</b></h2>
        </div>
        </div>
        </div>
    </div>

    <div id="navbar">
    <nav class="navbar  navbar-expand-md navbar-dark bg-dark shadow-sm " style="height:60px" >
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!--Left Side Of Navbar -->
                    <ul class="navbar-nav float-start ">
                  
              

              <a href="/">Home</a>
              <a href="/g">FAQ</a>
              <a href="/b">About Us</a>
              <a href="/a">Contact Us</a>
          
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>  {{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>

                    </svg> {{ __('Register') }}</a>
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

    <div>
 </div>
 <div class="abc">
<section id="ABOUT">
    <div class="container  ">
    <h1 > About Us </h1>
         <h6>We <b>SLEB</b> is Sri Lanka Expressway bus reservation platform that has transformed the way millions of Sri Lankan travel and purchase seats to travel across the country.Southern Expressway, the outer circular Expressway located in the Colombo metropolitan region, Katunayake Expressway and central Expressway are the Expressways which are currently in use.Public transportation system in Expressways in Sri Lanka, buses are the one and only available mode.Therefore this is the fastest and easy method to book seats. </h6>
    </div>
        
     
     <div id="about-2">
     <div class="content-box-lg">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item  justify-content-center">
                     <i class="fa fa-book"></i>
                     <h3>VISION</h3>
                     <hr>
                     <p> The main goal is to replace the current system with an automatic system and introduce a productive public transportation system.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item  justify-content-center">
                     <i class="fa fa-globe"></i>
                     <h3>MISSION</h3>
                     <hr>
                     <p> Provide web based expressway bus ticket booking function where a passenger can buy tickets, book seats and enabling passengers to check the availability through online in an effective way to encourage  passengers to use public transports without any difficulties. </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item  justify-content-center">
                     <i class="fa fa-pencil"></i>
                     <h3>Facilities</h3>
                     <hr>
                     <p> The passenger can log into the web site and search available buses from selecting destination. Bus details are displayed with the time and passenger can select a bus.Available seats are displayed and from them the passenger has an option to select the seat. Reserved seat also can be identified very easily. One or more seats can be selected and online payment facility is provided for passengers.Specially our payment gatways are secure. </p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div>   
 </section>
 </div>
<div>
        @include('layouts.footer')
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


