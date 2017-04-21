<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    public function index($request)
    {
        $data1=[];
    	if($request=="32")
    	{
    		$data1=DB::table('resources')->get();
            return view('resource', compact('data1'));
    	}
    	else $data1=DB::table('resources')->get();
        return view('resource', compact('data1'));
    }
    public function save(Request $request)
    {
        $data1 = [];
         $id = DB::table('resources')->insertGetId(
            ['batch' => '32', 'course' => $request->cname, 
            'link' => $request->resource_link, 'title' => $request->title_1]
        );
    	$data1=DB::table('resources')->get();
        return view('resource', compact('data1'));
    }
    public function delete(Request $request)
    {
        $data1 = [];
        $id = DB::table('resources')->where('course', '=', $request->cname)
                                ->where('link', '=', $request->resource_link)
                                ->where('title', '=', $request->title_1)
                                ->delete();
        $data1=DB::table('resources')->get();
        return view('resource', compact('data1'));
    }
    public function update(Request $request)
    {
        $data1 = [];
        $id = DB::table('resources')
            ->where('id', 3)
            ->where('batch', '32')
            ->update(['course' => $request->edit_cname,
                      'title' => $request->edit_title,
                      'link' => $request->edit_link 
                    ]);
        $id1='32';
        return redirect()->route('resource', [$id1])->with(['success'=>'Result updated']);
    }
}
