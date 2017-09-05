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
        $Batch_id= array("11", "12", "21", "22", "31", "32", "41", "42", "optional", "2mj");
        $b = $Batch_id[$request];
        //return $b;
       $curriculum = DB::table('curriculums')->where('batch', '=', $b)->get();
        $pdf = PDF::loadView('curriculumgenerate', ['curriculum'=>$curriculum, 'id'=>$request]);
        return $pdf->download('curriculum.pdf');
    }

    public function save(Request $request)
    {
        if($request->course_type == "theory") $h = $request->hours . " + 0";
        else $h = "0 + " . $request->hours;
         DB::table('curriculums')->insert(['batch' => $request->batch,
        'course' => $request->course,
        'title' => $request->title,
        'hours' => $h,
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
        if($request->course_type == "theory") $h = $request->hours . " + 0";
        else $h = "0 + " . $request->hours;
       DB::table('curriculums')->where('id','=', $request->id)
            ->update(['batch' => $request->batch,
        'course' => $request->course,
        'title' => $request->title,
        'hours' => $h,
        'credits' => $request->credits,
        'prerequisite' => $request->prerequisite]);
    
        
        $request->session()->flash('alert-success', 'Course is updated succesfully!');
       
        return redirect()->action('CurriculumController@index');
    }
}
