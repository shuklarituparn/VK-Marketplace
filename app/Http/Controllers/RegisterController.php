<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_screen ()
    {
        return view('auth.register');
    }

    public function register_user()
    {
        //perform the registration
    }
}
