<?php

namespace App\Http\Controllers\VideoController;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Controllers\Controller;


use App\Topic;
use App\News;
use App\User;
use App\Slide;
use App\Video;
use App\Role;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function getVideoAll(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
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
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
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
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
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
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
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
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
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
}
