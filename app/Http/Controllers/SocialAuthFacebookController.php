<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Session;

use Illuminate\Support\Facades\Validator;

class SocialAuthFacebookController extends Controller
{
    public function redirect() {
        return Socialite::driver("facebook")->redirect();
    }

    public function callback() {
        try {
            $facebookUser = Socialite::driver("facebook")->user();
            $existsUser = User::where("facebook_id", $facebookUser->id)->first();

            if ($existsUser) {     
                $infos = $existsUser->toArray();
                $infos_keys = array_keys($infos);
                $infos_values = array_values($infos);
                for ($i=0; $i < count($infos); $i++) { 
                    session([ $infos_keys[$i] => $infos_values[$i] ]);
                }
                Auth::loginUsingId($existsUser->id);
            } else {
                $user = new User;
                $user->name = $facebookUser->name;
                $user->facebook_id = $facebookUser->id;
                $user->save();

                $infos = $user->toArray();
                $infos_keys = array_keys($infos);
                $infos_values = array_values($infos);
                for ($i=0; $i < count($infos); $i++) { 
                    session([ $infos_keys[$i] => $infos_values[$i] ]);
                }
                Auth::loginUsingId($user->id);
            }

            $existsUser = User::where("facebook_id", $facebookUser->id)->first();
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
