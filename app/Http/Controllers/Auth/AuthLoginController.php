<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthLoginController extends Controller
{
    public function login(){
        return view('FrontEnd.auth.login');
    }
}
