<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
// Exception;

class SocialAuthGoogleController extends Controller
{
    public function redirect() {
        return Socialite::drive("google")->redirect();
    }

    public function callback() {
        try {
            $googleUser = Socialite("google")->user();
            $existsUser = User::where("email", $googleUser->email)->first();
            if ($existsUser) {
                Auth::loginUsingId($existsUser->id, true);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->save();
                Auth::loginUsingId($user->id, true);
            }
            return redirect()->to('/home');
        } catch (\Throwable $th) {
            return 'error';
        }
    }
}
