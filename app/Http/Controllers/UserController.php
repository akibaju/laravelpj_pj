<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        return view('register');
    }
    public function store(Request $request)
    {
        // $users = User::all();
        //ddd($request);
        $fors = $request->all();
        User::create($fors);
        return view('register');
    }
}
