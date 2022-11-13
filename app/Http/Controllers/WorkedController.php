<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class WorkedController extends Controller
{
    public function start()
    {
        // $workeds = Worked::all();
        return view('work_started');
    }
    public function finish(Request $request)
    {
        // $workeds = Worked::all();
        //ddd($request);
        $fors = $request->all();
        User::create($fors);
        return view('work_finished');
    }
}