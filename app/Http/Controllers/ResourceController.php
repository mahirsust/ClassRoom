<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index($request)
    {
    	if($request=="32")
    	{
    		return view('resource');
    	}
    	else return view('resource');
    }
}
