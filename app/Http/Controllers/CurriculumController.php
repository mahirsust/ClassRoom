<?php

namespace App\Http\Controllers;
//use App\Curriculum;
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
        $pdf = PDF::loadView('curriculumgenerate', ['curriculum'=>$curriculum, 'sem'=>$request]);
        return $pdf->download('curriculum.pdf');
    }

    public function save(Request $request)
    {
         DB::table('curriculums')->insert(['batch' => $request->batch,
        'course' => $request->course,
        'title' => $request->title,
        'hours' => $request->hours,
        'credits' => $request->credits,
        'prerequisite' => $request->prerequisite]);

        $request->session()->flash('alert-success', 'New course is added succesfully!');
        return redirect()->action('CurriculumController@index');
    }
    public function delete(Request $request)
    {
        DB::table('curriculums')->where('id','=', $request->id)->delete();
        $request->session()->flash('alert-success', 'Course is deleted succesfully!');
        return redirect()->action('CurriculumController@index');
    }
    public function update(Request $request)
    {
        DB::table('curriculums')->where('id','=', $request->id)
            ->update(['batch' => $request->batch,
        'course' => $request->course,
        'title' => $request->title,
        'hours' => $request->hours,
        'credits' => $request->credits,
        'prerequisite' => $request->prerequisite]);
    
        
        $request->session()->flash('alert-success', 'Course is updated succesfully!');
       
        return redirect()->action('CurriculumController@index');
    }
}
