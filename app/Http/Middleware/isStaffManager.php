<?php

namespace App\Http\Middleware;

use Closure;

class isStaffManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(Auth::user()->id_role == 1) {
          return $next($request);
      } else {
          exit();
      }
    }
}
