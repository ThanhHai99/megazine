<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm() {
        return view("auth.passwords.reset");
    }

    public function reset(Request $request) {
        if ($request->password != $request->password_confirmation) {
            return view("auth.passwords.reset", [
                "errorPasswordConfirmation" => "Retype password does not match"
            ]);
        } else {
            $user = User::where("remember_token", $request->token)
                        ->update([
                            "remember_token" => $request->_token,
                            "password" => bcrypt($request->password)
                        ]);
            return view("auth.passwords.reset", [
                "successUpdatePassword" => "Update successfully."
            ]);
        }

    }

}
