<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anandotsava'16
      @if(isset($title))
        | {{ $title }}
      @endif
    </title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/css/gallery.css">
    <link rel="stylesheet" href="public/css/material-cards.css">
    <link rel="stylesheet" href="public/css/demo.css" />
    <link rel="stylesheet" href="public/css/style2.css" />
    <link rel="stylesheet" href="public/css/db.css" />
    <link rel="stylesheet" href="public/css/custom.css" />
		<noscript>
			<link rel="stylesheet" href="public/css/styleNoJS.css" />
		</noscript>
    <link rel="stylesheet" href="public/css/hover-min.css" />
<link rel="stylesheet" href="public/css/hover-min.css" />
  <link rel="stylesheet" href="public/css/support.css">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button id="toggleNav" type="button" class="navbar-toggle fa fa-bars"></button>
          <a class="navbar-brand" href="home">
            <img src="public/img/brand2.png">
          </a>
        </div>
        <div id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="events"><span class="fa fa-modx"></span> Events</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="public/js/jquery.js"></script>
    @include('../schedule')
    <div id="main">
      @yield('content')
    </div>
    <script src="public/js/bootstrap.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASQ2WwplO0WCTrpCdd_6EvdGKruNiHmn8&callback=initMap">
    </script>
    <script src="public/js/scripts.js"></script>
    @if(isset($link))
      <script>
        $('#myNavbar a[href="{{$link}}"]').addClass('activeNav');
      </script>
    @endif
  </body>
</html>
