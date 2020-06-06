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

  // start get======================================================================================================
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
  // end get=========================================================================================================

  // start CRUD========================================================================================================
  public function employeeUpdate(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'employee_id' => 'required',
        'employee_id_role' => 'required',
        'employee_name' => 'required',
        'employee_email' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = User::find($input['employee_id']);
      if ($tmp->id_role == 0) {
        $tmp->id_role = 0;
      } else {
        $tmp->id_role = $input['employee_id_role'];
      }
      $tmp->name = $input['employee_name'];
      $tmp->email = $input['employee_email'];
      $tmp->save();
  
      return response()->json([
          'error' => false,
          'employee_id' => $input['employee_id'],
          'employee_id_role' => $input['employee_id_role'],
          'employee_name' => $input['employee_name'],
          'employee_email' => $input['employee_email']
      ], 200);

    };
  }
  
  public function employeeRemove(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $input = $request->all();
      User::where('id', $input['id'])->delete();
      return response()->json([
        'error' => false,
      ], 200);
    };
  }

  public function employeeUpdateStatusYes(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = User::find($input['id']);
      $tmp->id_status = 1;
      if ($tmp->id_role == 0) {
        return response()->json([
          'error' => true,
          'admin' => true
      ], 400);
        exit();
      }
      $tmp->save();
  
      return response()->json([
          'error' => false,
      ], 200);
    };
  }

  public function employeeUpdateStatusNo(Request $request) {
    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.");
    }

    if(Auth::user()->id_role == 2 || Auth::user()->id_role == 1 || Auth::user()->id_role == 0) {
      $this->validate($request, [
        'id' => 'required'
      ]);
  
      $input = $request->all();
      $tmp = User::find($input['id']);
      $tmp->id_status = 0;
      if ($tmp->id_role == 0) {
        return response()->json([
          'error' => true,
          'admin' => true
      ], 400);
        exit();
      }
      $tmp->save();
  
      return response()->json([
          'error' => false,
      ], 200);
    };
  }
  // end CRUD==========================================================================================================
}
