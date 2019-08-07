<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function resetPassword() {

        return view('auth/reset_password');
    }

    public function resetPasswordValidate(Request $request) {

        $user = Auth::user();

        if ($user) {

            //generation d'un token
            $token = Str::uuid();

            //on perisste le token
            $user->reset_token = $token;
            $user->save();

            //on envoie le mail
            Mail::send('email.password',['username' => $user->name, 'link' => route("password.link.reset.get",['token' => $token])],function ($message) use ($user) {
                $message->to($user->email)->subject('Email de reénitialisation');
            });

            return redirect(route('password.reset.get'))->with('success','Email de reset bien envoyer');
        }
    }

    public function sendResetLinkEmail($token) {

        $error['status'] = false;
        $user = User::where(['reset_token' => $token])->first();

        if (!$user) {
            $error['status'] = true;
            $error['message'] = 'Le token est incorrect';
        }

        if ($error['status']) {
            return view('auth/password_link')->withErrors("Le token est incorrect");
        } else {
            return view('auth/password_link',['token' => $token]);
        }
    }

    public function sendResetLinkEmailValidate($token) {

        $user = User::where(['reset_token' => $token])->first();

        $password = Input::get('password');
        $passwordRepeat = Input::get('password-repeat');

        $response['status'] = null;

        if ($password != $passwordRepeat) {
            $response['status'] = 'errors';
            $response['message'] = "le mot de passe doit être identique au champ répéter le mot de passe";
        } else if (!$user) {
            $response['status'] = 'errors';
            $response['message'] = "le token est incorrect";
        } else {

            $user->reset_token = null;
            $user->password = Hash::make($password);
            $user->save();

            $response['status'] = 'success';
            $response['message'] = "le mot de passe a bien était modifier";
        }

        return redirect(route('home'))->with($response['status'],$response['message']);
    }
}
