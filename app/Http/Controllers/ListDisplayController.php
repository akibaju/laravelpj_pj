<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class ListDisplayController extends Controller
{
    public function index()
    {
        // $listdisplays = Listdisplay::all();
        return view('list_display');
    }
}