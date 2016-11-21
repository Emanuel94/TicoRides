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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tico Rides</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/docs/examples/justified-nav/justified-nav.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
   <section class="container-fluid">
        <section class="row">
            <div class="col-md-4 col-sm-12">
                <div class="contenido logo">
                    <div id="logo-container">
                        <div id="logo-img">
                            <a href="{{ url('/') }}"><img src="{{asset('/css/images/logo6.jpg')}}" /></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contenido">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                 @if (Route::has('login'))
                <div class="contenido actions">
                    <ul>
                        <li><a href="{{ url('/login') }}" id="login-btn">login</a></li>
                        <li><a href="{{ url('/register') }}" id="signin-btn">signin</a></li>
                    </ul>
                </div>
                @endif

            </div>
        </section>
    </section>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                             Tico Rides
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
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
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html>
