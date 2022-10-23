<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkedController extends Controller
{
    public function start()
    {
        // $workeds = Worked::all();
        return view('work_started');
    }
    public function finish()
    {
        // $workeds = Worked::all();
        return view('work_finished');
    }
}