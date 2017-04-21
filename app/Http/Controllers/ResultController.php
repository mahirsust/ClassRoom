<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index($request)
    {
        $data1=[];
        if($request=="11a")
        {
            $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1'))->withSuccess('Result 1/1(a)');
        }
        else if($request=="11b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="12a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="12b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="21a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="21b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="22a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="22b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="31a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="31b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="32a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="32b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="41a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="41b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="42a")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="42b")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="11")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="12")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }

        else if($request=="21")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="22")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="31")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="32")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="41")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
        else if($request=="42")
        {
           $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
            return view('result', compact('data1')); 
        }
    }
    public function save(Request $request)
    {
        $data1 = [];
         $id = DB::table('results')->insertGetId(
            ['batch' => '32', 'course' => $request->cname, 
            'link' => $request->result_link, 'title' => $request->title_1]
        );
    	$data1=DB::table('results')->get();
        return view('result', compact('data1'));
    }
    public function delete(Request $request)
    {
        $data1 = [];
        $id = DB::table('results')->where('course', '=', $request->cname)
                                ->where('link', '=', $request->result_link)
                                ->where('title', '=', $request->title_1)
                                ->delete();
        $data1=DB::table('results')->get();
        return view('result', compact('data1'));
    }
    public function update(Request $request)
    {
        $data1 = [];
        $id = DB::table('results')
            ->where('id', 3)
            ->where('batch', '32')
            ->update(['course' => $request->edit_cname,
                      'title' => $request->edit_title,
                      'link' => $request->edit_link 
                    ]);
        $id1='32';
        return redirect()->route('result', [$id1])->with(['success'=>'Result updated']);
    }
}
