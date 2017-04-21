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
    	if($request=="32")
    	{
    		$data1=DB::table('results')->get();
            return view('result', compact('data1'));
    	}
    	else $data1=DB::table('results')->get();
        return view('result', compact('data1'));
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
