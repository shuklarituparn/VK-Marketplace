<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_screen()
    {
        //show login screen
        return view('auth.login');
    }
    public function login_user(LoginRequest $request)
    {
        //perform login
    }

}
