@extends('layouts.default')
@section('content')
<div id="section1" class="container-fluid">
  <div id="abvTime">
    <img src="img/logo.png" height="130" width="120">
    <img src="img/starts_in.png" height="50" width="300">
  </div>
  <ul id="time">
    <li id="dDays" data-toggle="tooltip" title="Days!">00</li>:<li id="dHours" data-toggle="tooltip" title="Hours!">00</li>:<li id="dMins" data-toggle="tooltip" title="Minutes!">00</li>:<li id="dSecs" data-toggle="tooltip" title="Seconds!">00</li>
  </ul>
  <div id="regLink">
    <a href="reg"><img src="img/registration.png" height="30" width="200"></a>
  </div>
</div>
<div id="section2" class="container-fluid">

</div>
<div id="section3">
  <h1>EVENTS </h1><h3>at a glance..</h3><br>
  <a href="events" class="btn btn-lg">View all</a>
</div>
@endsection
