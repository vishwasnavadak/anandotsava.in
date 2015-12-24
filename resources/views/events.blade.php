@extends('layouts.default')
@section('content')
<div id="topbarWrapper">
  <span id="null"></span>
  <div id="topbarInner" class="row">
    <div class="col-xs-2" style="font-size: large">
      <span id="toggleSidebar" class="fa fa-arrow-left"></span>
      <span style="margin-left: 10px;">Events</span>
    </div>
    <div class="col-xs-6 has-feedback">
      <input type="search" placeholder="Search" class="form-control">
      <span class="fa fa-search inputIcon"></span>
    </div>
    <div class="col-xs-4">

    </div>
  </div>
</div>
<div id="sidebar">
  <center><a class="btn" href="reg">REGISTER</a></center>
  <ul>
    <li class="iDisabled">CATEGORIES</li>
    <li class="active">All Categories</li>
    <li>Cat1</li>
    <li>Cat2</li>
    <li>Cat3</li>
    <li class="iDisabled">BRANCH</li>
    <li>All Branches</li>
    <li>brn1</li>
    <li>brn2</li>
    <li>brn3</li>
  </ul>
</div>
<script>
$("nav").css({"background-color": "rgba(0,0,0,0.3)"});
$('#topbarWrapper span#null').css({"height": $('nav').height()})
</script>
@endsection
