<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutineController extends Controller
{
    public function index()
    {
    	$data=DB::table('to')
    	      ->get();
    	// return  $data;
        return view('routine')->with('to',$data);
    }
}
