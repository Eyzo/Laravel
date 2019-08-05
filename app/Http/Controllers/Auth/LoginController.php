<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index() {
        return view('auth/login');
    }

    public function connect(Request $request) {

        Auth::attempt(['email' => Input::get('email'),'password' => Input::get('password')],Input::get('remember'));

        $status = Auth::check();

        if ($status) {
            $request->session()->flash('success','Vous êtes bien connecté');
            return redirect(route('home'),301);
        } else {
            $request->session()->flash('danger','Il y a eu une erreur lors de la connection');
            return redirect(route('login'),301);
        }

    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->flash('success','Vous êtes bien déconnecté');
        return redirect(route('home'),301);

    }

}
