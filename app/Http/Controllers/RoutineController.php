<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutineController extends Controller
{
    public function index($request)
    {
    	$data = [];
    	//return $request;
    	if($request=="32")
		{
			$data=DB::table('to')->get();
		}
    	 //return  $data;
    	return view('routine', compact('data'));
        // return view('routine')->with('to',$data);
    }
}
