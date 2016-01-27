<?php
class CollegeController extends BaseController {
  public $restful = true;
  public function validate() {
    $row = CollCred::find(Input::get('id'));
    if(!$row)
      return Redirect::to('reg')
        ->with('type', 'id')
        ->with('err', 'Invalid college id');
    if(strcmp($row->passwd, md5(Input::get('passwd'))))
      return Redirect::to('reg')
        ->with('type', 'passwd')
        ->with('err', 'Invalid college id / password combination');
    Session::put('collId', $row->id);
    return Redirect::to('member');
  }
  public function member() {
    if(Session::has('collId'))
      return View::make('member')
        ->with('link', 'Member')
        ->with('data', CollDetails::find(Session::get('collId')));
    return Redirect::to('reg');
  }
  public function updateDetails() {
    if(Session::has('collId')) {
      $cId = Session::get('collId');
      $tmp = Participant::where('cId', $cId);
      $phone = Input::get('pPhone');
      if($tmp)
        $tmp->delete();
      foreach(Input::get('pName') as $key => $name) {
        if(strlen($name) > 0) {
          $p = new Participant;
          $p->cId = $cId;
          $p->pid = $key + 1;
          $p->name = $name;
          if(strlen($phone[$key]) > 0)
            $p->phone = $phone[$key];
          $p->save();
        }
      }
      return Redirect::to('member');
    }
    return Redirect::to('reg');
  }
  public function logout() {
    Session::pull('collId');
    return Redirect::to('reg');
  }
}
