<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Curriculum;
use PDF;

class CurriculumController extends Controller
{
    public function index()
    {
        $data1=[];
        $data1=DB::table('curriculums')->get();
                                     
        return view('curriculum', compact('data1')); 
    }

     public function getPDF($request)
    {
       $curriculum = DB::table('curriculums')->where('batch', '=', $request)->get();;
        $pdf = PDF::loadView('curriculumgenerate', ['curriculum'=>$curriculum]);
        return $pdf->download('curriculum.pdf');
    }
}
