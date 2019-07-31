<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {

    }

    public function myHome() {
        return view('theme/layoutAdmin');
    }

    public function myUsers() {
        return view('theme/layoutAdmin');
    }

}
