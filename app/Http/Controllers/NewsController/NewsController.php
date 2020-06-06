<?php

namespace App\Http\Controllers\NewsController;

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


class NewsController extends Controller
{
    use AuthenticatesUsers;

  public function __construct() {
    $this->middleware('auth');
  }
 
//   start get =======================================================================================================================
  public function getIndex(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "Not allow.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }

      return view('page.admin._table',[
        // 'topics' => $topics
      ]);
    };
  }

  public function getNewsAll(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
      
      // $query=News::all();
      $query=News::join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "topic.name as id_topic", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
  
      return Datatables::of($query)
      ->make(true);
    };
  }

  public function getNewsStyle(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 1)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  } 

  public function getNewsFashion(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 2)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  }

  public function getNewsTravel(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 3)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  }

  public function getNewsSports(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      if (!Auth::check()) {
        Auth::logout();
        return view('auth.login');
        exit();
      }
  
      $query=News::where('id_topic', 4)
                    ->join("users", "news.id_creator", "=", "users.id")
                    ->join("topic", "news.id_topic", "=", "topic.id")
                    ->select("news.id", "users.name as id_creator", "news.hot_news", "news.id_status", "news.image", "news.tag", "news.caption", "news.subtitle");
      return Datatables::of($query)->make(true);
    };
  }
//   end get =======================================================================================================================

// start CRUD
// end CRUD


}
