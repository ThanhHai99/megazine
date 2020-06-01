<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function authenticated(Request $request, $user) {
        User::where("id", $user->id)
                ->update(['remember_token' => Str::random(100)]);

        if ($user->id_status == 0) {
            Auth::logout();
            return view('auth.login', [
                'message' => 'This account is locked.'
            ]);
            exit();
        } else {
            session(['userid' => $user->id]);
        }

        if ($user->id_role == 2 || $user->id_role == 1 || $user->id_role == 0) {
            $infos = $user->toArray();
            for ($i=0; $i < count(array_keys($infos)); $i++) { 
                $infos_keys[$i] = 'user_' . array_keys($infos)[$i];
            }
            $infos_values = array_values($infos);
            for ($i=0; $i < count($infos); $i++) { 
                session([ $infos_keys[$i] => $infos_values[$i] ]);
            }
            return redirect("dashboard/index");
        }

        if ($user->id_status == 1) {
            return redirect("home");
        }
    }

    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout() {
        Auth::logout();

        return redirect("/home");
    }
}
