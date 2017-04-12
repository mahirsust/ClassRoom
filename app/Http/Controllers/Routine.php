<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routine extends Controller
{
    public function index()
    {
        return view('routine');
    }
}
