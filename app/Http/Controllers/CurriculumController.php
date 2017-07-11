<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    public function index()
    {
        $data1=[];
        $data1=DB::table('curriculums')->get();
                                     
        return view('curriculum', compact('data1')); 
    }
}
