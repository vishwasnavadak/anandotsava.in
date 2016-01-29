@extends('layouts.default')
@section('content')
<div id="regWrapper">

  <form class="form" onsubmit="return validate()" action="reg/validate" method="post">
    <a href="#">
      <div class="arrow">
        <p>College</p>
      </div>
    </a>
    <a href="#">
      <div class="arrow">
        <p>Fashion Show</p>
      </div>
    </a>
      <div class="input-group form-group-lg" id="divId">
        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
        <input class="form-control" name="id" type="text" placeholder="College id">
        <a class="form-control-feedback hidden err" data-toggle="tooltip" title="{{Session::get('err')}}">
          <span class="fa fa-remove"></span>
        </a>
      </div>
      <div class="input-group form-group form-group-lg" id="divPasswd">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" name="passwd" type="password" placeholder="Password">
        <a class="form-control-feedback hidden err" data-toggle="tooltip" title="{{Session::get('err')}}">
          <span class="fa fa-remove"></span>
        </a>
      </div>
      <button type="submit" class="btn-lg">Submit</button>
      <p>Having trouble..? Go <a href="#">here</a></p>
  </form>
</div>
@if(Session::has('err'))
<script>
  if("{{Session::get('type')}}" == 'id') {
    $('#divId a')
      .removeClass('hidden')
      .focus();
    $('#divId').addClass('has-error');
    $('#divPasswd').removeClass('has-error');
    $('#divPasswd a').addClass('hidden');
  } else {
    $('#divPasswd a')
      .removeClass('hidden')
      .focus();
    $('#divPasswd').addClass('has-error');
    $('#divId').removeClass('has-error');
    $('#divId a').addClass('hidden');
  }
</script>
@endif
<script>
var validate = function() {
  if($('#regWrapper input[name=id]').val().length == 0) {
    $('#divId input')
    .addClass('err')
    .attr('data-toggle', 'tooltip')
    .attr('title', 'Please fill in Id');
    $('#divId').addClass('has-error');
    $('#divPasswd').removeClass('has-error');
    $('#divId a').removeClass('hidden');
    $('#divPasswd a').addClass('hidden');
    return false;
  } else if($('#regWrapper input[name=passwd]').val().length == 0) {
    $('#divPasswd').addClass('has-error');
    $('#divId').removeClass('has-error');
    $('#divPasswd a')
      .removeClass('hidden')
      .attr('title', 'Please fill in password')
      .hover();
    $('#divId a').addClass('hidden');
    return false;
  }
  return true;
}
$('#regWrapper form').css({'padding-top': ($(window).height() / 2) - 93});
$('#schedule').addClass('hidden');
</script>
@endsection
