<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // $logins = Login::all();
        return view('login');
    }
    public function login()
    {
        // $logins = Login::all();
        return view('login');
    }
    public function logout()
    {
        // $logouts = Logout::all();
        return view('logout');
    }
}