<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\User;

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

        if ($user != null) {
            Mail::to($user['email'])->send(new WelcomeMail());
            return view("auth.passwords.email", [
                'successSentMail' => 'Sent complety.'
            ]);
        } else {
            return view("auth.passwords.email", [
                'errorSentMail' => 'Email not exists.'
            ]);
        }

    }


}
