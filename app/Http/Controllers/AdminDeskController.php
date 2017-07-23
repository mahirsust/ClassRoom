<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDeskController extends Controller
{
    public function index()
    {
    	$data1=DB::table('users')->where('name', '!=', "Super Admin")
                                   ->get();
        return view('admindesk', compact('data1')); 
    }
}
