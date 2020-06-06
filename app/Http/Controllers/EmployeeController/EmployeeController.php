<?php

namespace App\Http\Controllers\EmployeeController;

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


class EmployeeController extends Controller
{
    use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('auth');
    }

      public function getEmployeeAll(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "Not allow.");
        }
    
        if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
          if (!Auth::check()) {
            Auth::logout();
            return view('auth.login');
            exit();
          }
      
          $query=User::join("role", "users.id_role", "=", "role.id")
                        ->select("users.id", "role.name as id_role", "users.id_status", "users.name", "users.email");
    
          return Datatables::of($query)
          ->make(true);
        };
      }
    
      public function getEmployeeAdmin(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
        if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
          if (!Auth::check()) {
            Auth::logout();
            return view('auth.login');
            exit();
          }
      
          $query=User::where('id_role', 0);
          return Datatables::of($query)
          ->setRowAttr(['align'=>'center'])
          // ->make(true);
          ->toJson();
        };
      }
      
      public function getEmployeeStaff(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
        if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
          if (!Auth::check()) {
            Auth::logout();
            return view('auth.login');
            exit();
          }
      
          $query=User::where('id_role', 1);
          return Datatables::of($query)
          ->setRowAttr(['align'=>'center'])
          // ->make(true);
          ->toJson();
        };
      }
    
      public function getEmployeeCreator(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
        if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
          if (!Auth::check()) {
            Auth::logout();
            return view('auth.login');
            exit();
          }
      
          $query=User::where('id_role', 2);
          return Datatables::of($query)->make(true);
        };
      }
    
      public function getEmployeeGuest(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        }
    
        if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
          if (!Auth::check()) {
            Auth::logout();
            return view('auth.login');
            exit();
          }
      
          $query=User::where('id_role', 3);
          return Datatables::of($query)->make(true);
        };
      }
}
