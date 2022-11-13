<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        // $logins = Login::all();
        return view('login');
    }
    public function login(Request $request)
    {
        // $logins = Login::all();
        //ddd($request);
        $fors = $request->all();
        User::create($fors);
        return view('login');
    }
    public function logout()
    {
        // $logouts = Logout::all();
        return view('logout');
    }
}