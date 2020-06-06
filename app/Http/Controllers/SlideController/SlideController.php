<?php

namespace App\Http\Controllers\SlideController;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Controllers\CreatorController;

use App\Topic;
use App\News;
use App\User;
use App\Slide;
use App\Video;
use App\Role;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class SlideController extends CreatorController
{
  use AuthenticatesUsers;
  
  public function __construct() {
      $this->middleware('auth');
      $this->middleware('isAdmin');
  }
  // start get=========================================================================================================  
  public function getSlideAll(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Slide::join("users", "slide.id_creator", "=", "users.id")
                    ->join("topic", "slide.id_topic", "=", "topic.id")
                    ->select("slide.id", "topic.name as id_topic", "users.name as id_creator", "slide.image", "slide.tag", "slide.heading_primary", "slide.heading_secondary");

      return Datatables::of($query)->make(true);
    };
  }
  // end get==========================================================================================================

  // start CRUD========================================================================================================
  public function slideUpdate(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'heading_primary' => 'required',
        'heading_secondary' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Slide::find($input['id']);
      $tmp->heading_primary = $input['heading_primary'];
      $tmp->heading_secondary = $input['heading_secondary'];
      $tmp->save();
  
      return response()->json([
          'error' => false,
          'id' => $input['id'],
          'heading_primary' => $tmp->heading_primary,
          'heading_secondary' => $tmp->heading_secondary
      ], 200);

    };

  }

  public function slideRemove(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      Slide::where('id', $input['id'])->delete();
      return response()->json([
          'error' => false,
          'id' => $input['id']
      ], 200);
    };
  }
  
  public function slideUpdateImage(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      $tmp = Slide::find($input['id_slide_hide']);
      $file = $request->file('image_slide');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '_'. uniqid() . '.' . $extension;
      $file->move("images", $filename);
      $tmp->image = $filename;
      $tmp->save();
      return response()->json([
        'error' => false,
        'id' => $input['id_slide_hide'],
        'image' => $tmp->image
      ], 200);
    };
  }

  public function slideInsert(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id_topic' => 'required',
        'image' => 'required',
        'tag' => 'required',
        'caption' => 'required',
        'subtitle' => 'required'
      ]);
      
      $input = $request->all();

      $tmp = new Slide;  
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_'. uniqid() . '.' . $extension;
        $file->move("images", $filename);
        $tmp->image = $filename;
      }
  
      
      $tmp->id_topic = $input['id_topic'];
      $tmp->id_creator = session('user_id');
      $tmp->tag = $input['tag'];
      $tmp->heading_primary = $input['caption'];
      $tmp->heading_secondary = $input['subtitle'];
      $tmp->save();
  
      return response()->json([
        'error' => false
      ], 200);

    };

  }
  // end CRUD=========================================================================================================
}
