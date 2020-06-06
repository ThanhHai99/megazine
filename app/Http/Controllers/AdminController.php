<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AdminController extends Controller
{
    public function isAdmin(Request $request) {
        if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
          return redirect("/home")->with("notAdmin", "You are not admin.");
        };
      }
}
