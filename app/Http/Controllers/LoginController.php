<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_screen()
    {
        //show login screen
        return view('login');
    }
    public function login_user()
    {
        //perform login
    }

}
