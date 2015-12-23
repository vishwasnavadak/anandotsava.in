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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">
            <img src="img/brand.png" height="30" width="250">
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="events">Events</a></li>
          <li><a href="#">Action</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </nav>
    <div id="main">
      @yield('content')
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
