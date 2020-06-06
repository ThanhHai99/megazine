<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Controllers\Controller;

class AuthenticateController extends Controller
{

	use AuthenticatesUsers;

  public function __construct() {
    $this->middleware('auth');
	}
	
	public function getLogin() {
		return view('auth.login'); 
	}

	public function getLogout(Request $request) {
		$request->session()->flush();
		Auth::logout();
		return redirect("/login");
	}
}
