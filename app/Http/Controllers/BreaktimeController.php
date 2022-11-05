<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreaktimeController extends Controller
{
    public function start()
    {
        // $breaktimes = Breaktime::all();
        return view('breaktime_started');
    }
    public function finish(Request $request)
    {
        // $breaktimes = Breaktime::all();
        //ddd($request);
        $fors = $request->all();
        User::create($fors);
        return view('breaktime_finished');
    }
}