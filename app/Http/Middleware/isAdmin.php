<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    if (!Auth::check()) {
      Auth::logout();
      return view('auth.login');
      exit();
    }

    if(Auth::user()->id_role != 2 && Auth::user()->id_role != 1 && Auth::user()->id_role != 0) {
      return redirect("/home")->with("notAdmin", "You are not admin.[middle]");
    } else {
      return $next($request);
    };
  }
}
