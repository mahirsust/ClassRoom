<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutineController extends Controller
{
    public function index($request)
    {
    	$data1=[];
        $data1=DB::table('routines')->where('batch', '=', $request)->get();
        $data2=[];
        $data2=DB::table('tomorrows')->where('batch', '=', $request)->get();
        return view('routine', compact('data1', 'data2', 'request')); 
    }

    
}
