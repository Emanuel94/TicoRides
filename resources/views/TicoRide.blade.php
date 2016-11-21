<!DOCTYPE html>
<html lang="en">
    <head> 
         <!-- Fonts -->
         <link rel="stylesheet" href="../public/css/style.css">

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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/docs/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script src="../bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>
    <title>Tico Rides</title>
      </head>

        <body>
          <section class="container-fluid">
        <section class="row">
            <div class="col-md-4 col-sm-12">
                <div class="contenido logo">
                    <div id="logo-container">
                        <div id="logo-img">
                            <a href="{{ url('/') }}"><img src="css/images/logo6.jpg" /></a> 
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
    </section>
    <section class="container-fluid filter">
      <section class="items-principal-page hello-container slide-up">
          <div class="items-hello">
             
          </div>
      </section>
    </section>

   <div id="map" style="position:absolute;" class="container close-popup close-map"></div>
 </body>
</html>
