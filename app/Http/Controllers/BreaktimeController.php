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
    public function finish()
    {
        // $breaktimes = Breaktime::all();
        return view('breaktime_finished');
    }
}