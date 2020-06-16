<?php

namespace App\Http\Controllers\EmployeeController;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Controllers\StaffManagerController;

use App\Topic;
use App\News;
use App\User;
use App\Slide;
use App\Video;
use App\Role;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\
Support\Facades\File;


class EmployeeController extends StaffManagerController {
  use AuthenticatesUsers;
  
  public function __construct() {
    $this->middleware('auth');
    $this->middleware('isAdmin');
    $this->middleware('isStaffManager');
  }

  // start get======================================================================================================
  public function getEmployeeAll(Request $request) {  
    $query=User::join("role", "users.id_role", "=", "role.id")
                  ->select("users.id", "role.name as id_role", "users.id_status", "users.name", "users.email");

    return Datatables::of($query)
    ->make(true);
  }

  public function getEmployeeAdmin(Request $request) {  
    $query=User::where('id_role', 0);
    return Datatables::of($query)
    ->setRowAttr(['align'=>'center'])
    // ->make(true);
    ->toJson();
  }
  
  public function getEmployeeStaff(Request $request) {  
    $query=User::where('id_role', 1);
    return Datatables::of($query)
    ->setRowAttr(['align'=>'center'])
    // ->make(true);
    ->toJson();
  }

  public function getEmployeeCreator(Request $request) {  
    $query=User::where('id_role', 2);
    return Datatables::of($query)->make(true);
  }

  public function getEmployeeGuest(Request $request) {  
    $query=User::where('id_role', 3);
    return Datatables::of($query)->make(true);
  }
  // end get=========================================================================================================

  // start CRUD========================================================================================================
  public function employeeUpdate(Request $request) {
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

  }
  
  public function employeeRemove(Request $request) {
    $input = $request->all();
    User::where('id', $input['id'])->delete();
    return response()->json([
      'error' => false,
    ], 200);
  }

  public function employeeUpdateStatus(Request $request) {
    $this->validate($request, [
      'id' => 'required'
    ]);

    $input = $request->all();
    $tmp = User::find($input['id']);
    if ($input['id_status'] == 0) {
      $tmp->id_status = 1;
    } else {
      $tmp->id_status = 0;
    }

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
        'id_status' => $tmp->id_status
    ], 200);
  }

  // end CRUD==========================================================================================================
}
