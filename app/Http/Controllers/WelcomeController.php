<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('ip');
    }

    public function index($name) {


        return Input::get('q');

    }

}
