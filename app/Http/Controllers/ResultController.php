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
        $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
        return view('result', compact('data1', 'request')); 
    }
    public function save(Request $request)
    {
        $data1 = [];
         $id = DB::table('results')->insertGetId(
            ['batch' => $request->semester, 'course' => $request->cname, 
            'link' => $request->result_link, 'title' => $request->title_1]
        );
         $request = $request->semester;
        $data1=DB::table('results')->where('batch', '=', $request)
                                     ->get();
    	return redirect()->action(
                                 'ResultController@index', ['id' => $request]
                                );
    }
    public function delete(Request $request)
    {
        $data1 = [];
        $id = DB::table('results')->where('id', '=', $request->rid)
                                ->delete();
        $request = $request->semester;
        return redirect()->action(
                                 'ResultController@index', ['id' => $request]
                                );
    }
    public function update(Request $request)
    {
        $data1 = [];
        $id = DB::table('results')
            ->where('id', $request->rid)
            ->where('batch', $request->semester)
            ->update(['course' => $request->edit_cname,
                      'title' => $request->edit_title,
                      'link' => $request->edit_link 
                    ]);
        $request = $request->semester;
        return redirect()->action(
                                 'ResultController@index', ['id' => $request]
                                );
    }
}
