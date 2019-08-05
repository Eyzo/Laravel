<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $this->middleware('guest');
    }

    public function resetPassword() {

        return view('auth/reset_password');
    }

    public function resetPasswordValidate(Request $request) {

        $this->validate($request,['email' => 'required|email']);

        $user = User::where(['email' => Input::get('email')])->first();

        if ($user) {

            $response = $this->sendResetLinkEmail($request);

            dd($response);

            return redirect(route('password.reset.get',[
                'success' => $response
            ]));
        }
    }

    public function sendResetLinkEmail() {

        return view('auth/password_link');

    }

    public function sendResetLinkEmailValidate() {


    }
}
