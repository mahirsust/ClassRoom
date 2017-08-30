<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;

class AdminDeskController extends Controller
{
	public function index()
	{
		//$decrypted=[];
		$data1=DB::table('users')->get();
		return view('admindesk', compact('data1')); 
	}
}
