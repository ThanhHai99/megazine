<?php

namespace App\Http\Controllers\VideoController;

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

class VideoController extends CreatorController
{
  use AuthenticatesUsers;
  
  public function __construct() {
      $this->middleware('auth');
      $this->middleware('isAdmin');
      $this->middleware('isCreator');
  }

  // start get
  public function getVideoAll(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::join("users", "video.id_creator", "=", "users.id")
                    ->join("topic", "video.id_topic", "=", "topic.id")
                    ->select("video.id", "topic.name as id_topic", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.video", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoStyle(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 1)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoFashion(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 2)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoTravel(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 3)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }

  public function getVideoSports(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=Video::where("id_topic", 4)
                    ->join("users", "video.id_creator", "=", "users.id")
                    ->select("video.id", "users.name as id_creator", "video.hot_news", "video.id_status", "video.image", "video.tag", "video.caption", "video.subtitle");
      return Datatables::of($query)->make(true);

    };
  }
  // end get

  // start CRUD
  public function videoUpdate(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'video_id_topic' => 'required',
        'video_tag' => 'required',
        'video_caption' => 'required',
        'video_subtitle' => 'required'
      ]);
  
      $input = $request->all();
      // dd($input);
      $tmp = Video::find($input['id']);
      $tmp->id_topic = $input['video_id_topic'];
      $tmp->tag = $input['video_tag'];
      $tmp->caption = $input['video_caption'];
      $tmp->subtitle = $input['video_subtitle'];
      $tmp->save();
  
      return response()->json([
          'error' => false,
          'id' => $tmp->id
      ], 200);

    };

  }

  public function videoInsert(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        '_video_id_topic' => 'required_without:video_id_topic',
        'video_id_topic' => 'required_without:_video_id_topic',
        'video_hot_news' => 'required',
        'video_image' => 'required',
        'video_video' => 'required',
        'video_tag' => 'required',
        'video_caption' => 'required',
        'video_subtitle' => 'required'
      ]);
      
      $input = $request->all();
      
      $tmp = new Video;
  
      if ($request->hasFile('video_image')) {
        $file = $request->file('video_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_'. uniqid() . '.' . $extension;
        $file->move("images", $filename);
        $tmp->image = $filename;
      }

      if ($request->hasFile('video_video')) {
        $file = $request->file('video_video');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_'. uniqid() . '.' . $extension;
        $file->move("videos", $filename);
        $tmp->video = $filename;
      }

      if ($input['_video_id_topic'] != "") {
        $tmp->id_topic = $input['_video_id_topic'];
      } else {
        $tmp->id_topic = $input['video_id_topic'];
      }
      $tmp->id_creator = session('user_id');
      $tmp->hot_news = $input['video_hot_news'];
      $tmp->tag = $input['video_tag'];
      $tmp->caption = $input['video_caption'];
      $tmp->subtitle = $input['video_subtitle'];
      $tmp->save();
  
      return response()->json([
        'error' => false,
        'input'  => $input
      ], 200);

    };

  }

  public function videoRemove(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      Video::where('id', $input['id'])->delete();
      return response()->json([
        'error' => false,
        'id'  => $input["id"]
      ], 200);

    };
  }

  public function newsUpdateHotVideo(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      if ($input['hot_news'] == 0) {
        $tmp->hot_news = 1;
      } else {
        $tmp->hot_news = 0;
      }
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateStatusVideo(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      if ($input['id_status'] == 0) {
        $tmp->id_status = 1;
      } else {
        $tmp->id_status = 0;
      }
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateStatusVideoYes(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      $tmp->id_status = 1;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateStatusVideoNo(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = Video::find($input['id']);
      $tmp->id_status = 0;
      $tmp->save();
  
      return response()->json([
          'error' => false,
          // 'task'  => $tmp,
      ], 200);

    };

  }

  public function newsUpdateImageVideo(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      $tmp = Video::find($input['id_video_hide']);    
      
      $image_path = "images/".$tmp->image;  // Value is not URL but directory file path
      if(File::exists($image_path)) {
        File::delete($image_path);
      }
  
      $file = $request->file('image_video');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '_'. uniqid() . '.' . $extension;
      $file->move("images", $filename);
      $tmp->image = $filename;
      $tmp->save();
  
      return response()->json([
        'error' => false,
        'id' => $tmp->id,
        'image' => $tmp->image
      ], 200);

    };

  }

  public function newsUpdateVideoVideo(Request $request) {
    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      $tmp = Video::find($input['id_video_hide']);    
      
      $video_path = "videos/".$tmp->video;  // Value is not URL but directory file path
      if(File::exists($video_path)) {
        File::delete($video_path);
      }
  
      $file = $request->file('video_video');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '_'. uniqid() . '.' . $extension;
      $file->move("videos", $filename);
      $tmp->video = $filename;
      $tmp->save();
  
      return response()->json([
        'error' => false,
        'id' => $tmp->id,
        'video' => $tmp->video
      ], 200);

    };

  }
  // end CRUD
}
