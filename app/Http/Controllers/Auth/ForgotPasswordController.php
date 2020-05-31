<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\URL;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm() {
        return view("auth.passwords.email");
    }

    public function sendResetLinkEmail(Request $request) {
        $user = User::where("email", $request->email)
                    ->first();
        // dd($user['remember_token']);
        if ($user != null) {
            Mail::to($user['email'])->send(new ResetPasswordMail($user));
            return view("auth.passwords.email", [
                'successSentMail' => 'Sent complety.'
            ]);
        } else {
            return view("auth.passwords.email", [
                'errorSentMail' => 'Email not exists.'
            ]);
        }
    }

    // public function changePassword(Request $request) {
    //     //Change Password
    //     // dd($request->server['HTTP_REFERER']);
    //     // dd(URL::current());
    //     // $user = User::where("email", $request->email)
    //     //             ->first();
    //     // dd($user);
    //     dd($request);
    //     // dd($request['url']);
    //     // $arrS = $request->server;
    //     // dd(get_object_vars($arrS['parameters']));
    //     // foreach ($arrS as $arr) {
    //     //     var_dump(array_flatten($arrS, 1));
    //     // }
        


    //     // dd($request['password']);
    //     // $user = Auth::user();
    //     // dd($user);



    //     // $user->password = Hash::make($password);
    //     // $user->password = bcrypt($request->get('new-password'));
    //     $user->save();

    // }


}
