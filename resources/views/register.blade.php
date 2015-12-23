@extends('layouts.default')
@section('content')
<div id="regWrapper">
  <span id="null"></span>
  <form class="form" action="index.html" method="post">
      <div class="input-group form-group-lg">
        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
        <input class="form-control" type="text" placeholder="College id">
      </div>
      <div class="input-group form-group form-group-lg">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" placeholder="Password">
      </div>
      <button type="submit" class="btn-lg">Submit</button>
      <p>Having trouble..? Go <a href="#">here</a></p>
  </form>
</div>
@endsection
