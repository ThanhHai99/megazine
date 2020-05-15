<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

// use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Session;

use Illuminate\Support\Facades\Validator;

class SocialAuthGoogleController extends Controller
{
    public function redirect() {
        return Socialite::driver("facebook")->redirect();
    }

    public function callback() {
        try {
            $facebookUser = Socialite::driver("facebook")->user();
            $existsUser = User::where("email", $facebookUser->email)->first();
            if ($existsUser) {
                Auth::loginUsingId($existsUser->id, true);
            } else {
                $user = new User;
                $user->name = $facebookUser->name;
                $user->email = $facebookUser->email;
                $user->facebook_id = $facebookUser->id;
                $user->save();
                Auth::loginUsingId($user->id, true);
            }
    
            if ($existsUser->id_role == 1) {
                return redirect("dashboard/index");
            } else if ($existsUser->id_role == 2) {
                return redirect("home");
            }

        } catch (\Throwable $th) {
            return 'error';
        }
    }
}
