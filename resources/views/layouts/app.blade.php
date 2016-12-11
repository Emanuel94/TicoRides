<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
         <link href="{{asset('/css/app.css')}}" rel="stylesheet">
     <!-- Fonts -->
         <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--  /* boostrap*/ -->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
   
     <title>Tico Rides</title>
  
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <nav class="sty ">
            <div class="container ">
               <div class="col-md-4 col-sm-12">
                    <div class="contenido logo">
                        <div id="logo-container">
                            <div id="logo-img">
                                <a href="{{ url('/') }}"><img src="{{asset('/css/images/logo6.jpg')}}" /> </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contenido actions" id="app-navbar-collapse">
                   
                <div class="">
                   @if (Route::has('login'))
                    <div >
                        <ul>
                        <li class="dropdown"><a href="{{ url('/') }}"><i class="fafa-dashboard"   ></i>Dashboard</a></li>
                            <li class="active"><a href="{{route('ride-index')}}">My Rides</a></li>  
                           <!-- <li><a href="{{ url('/login') }}" id="login-btn">login</a></li>
                            <li><a href="{{ url('/register') }}" id="signin-btn">signin</a></li> -->
                        </ul>
                       
                        <ul class="nav navbar-nav">
                           &nbsp;
                        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                 </div>
                   @endif
                </div>
                </div>
            </div>
     </nav>
        
    </section>
        @yield('content')
    </div>
</body>

<script src="{{asset('/js/api-google.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0UKCuFpsnzvi5kPfHws5ctwQUbVinGRo&libraries=places&callback=initAutocomplete"
         async defer></script>

</html>
