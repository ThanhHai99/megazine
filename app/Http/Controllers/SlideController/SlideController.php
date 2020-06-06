<?php

namespace App\Http\Controllers\SlideController;

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


class SlideController extends Controller
{
    
    public function getSlideAll(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
        if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
    
          if (!Auth::check()) {
            Auth::logout();
            return view('auth.login');
            exit();
          }
      
          // $query=Slide::all();
          $query=Slide::join("users", "slide.id_creator", "=", "users.id")
                        ->join("topic", "slide.id_topic", "=", "topic.id")
                        ->select("slide.id", "topic.name as id_topic", "users.name as id_creator", "slide.image", "slide.tag", "slide.heading_primary", "slide.heading_secondary");
    
          return Datatables::of($query)->make(true);
        };
      }
}
