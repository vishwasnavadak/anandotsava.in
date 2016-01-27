@extends('layouts.default')
@section('content')
<div class="container" id="dbWrapper">
  <div class="row">
    <div class="col-sm-6">
      <h3>
        <strong>College: </strong> {{$data->name}}
      </h3>
    </div>
    <div class="col-sm-6">
      <h3>
        <strong>You: </strong> {{$data->caName}}
      </h3>
    </div>
  </div>
  <h2>Participants Details</h2>
  <form class="form" action="member/update" method="post">
    @foreach($data->participants as $key=>$value)
    <div class="form-group row">
      <div class="col-sm-5">
        <div class="input-group">
          <span class="input-group-addon">AN-{{$data->id}}-{{$key+1}}</span>
          <input type="text" name="pName[]" class="form-control" placeholder="Enter name" maxlength="32" value="{{$value->name}}">
        </div>

      </div>
      <div class="col-sm-5">
        <div class="input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="pPhone[]" class="form-control" placeholder="Enter phone no" maxlength="10" value="{{$value->phone}}">
        </div>
      </div>
      <div class="col-sm-2">
        <button type="button" class="btn btn-default">Browse</button>
      </div>
    </div>
    @endforeach
    <?php
      if(isset($key))
        $key++;
      else
        $key = 0;
     ?>
    @while($key <= 5)
    <div class="form-group row">
      <div class="col-sm-1">
        <label>{{++$key}}.</label>
      </div>
      <div class="col-sm-5">
        <input type="text" name="pName[]" class="form-control" placeholder="Enter name" maxlength="32">
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-addon">+91</span>
          <input type="text" name="pPhone[]" class="form-control" placeholder="Enter phone no" maxlength="10">
        </div>
      </div>
      <div class="col-sm-2">
        <button type="button" class="btn btn-default">Browse</button>
      </div>
    </div>
    @endwhile
    <div class="form-group">
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="button" class="btn btn-primary" onclick="edit()">Edit</button>
      <a href="member/logout" class="btn btn-warning">Logout</a>
    </div>
  </form>
</div>
<script>
$('#dbWrapper input').each(function() {
  $(this).attr('disabled', true);
});
function edit() {
  $('#dbWrapper input').each(function() {
    $(this).attr('disabled', false);
  });
}
</script>
@endsection
