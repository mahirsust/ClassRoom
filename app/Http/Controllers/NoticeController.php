<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function index($request)
    {
        $data1=[];
        $data1=DB::table('notices')->where('batch', '=', $request)
                                   ->orderBy('id','desc')
                                   ->get();
        return view('notice', compact('data1', 'request')); 
    }
    public function save(Request $request)
    {
        $data1 = [];
         $id = DB::table('notices')->insertGetId(
            ['batch' => $request->semester, 'course' => $request->cname, 
            'notice_date' => $request->n_date, 'notice' => $request->notice_1]
        );
         $request = $request->semester;
    	$data1=DB::table('notices')->where('batch', '=', $request)
                                     ->get();
        // return $request;
        return redirect()->action(
                                 'NoticeController@index', ['id' => $request]
                                );
        // return view('notice', compact('data1' , 'request'));
    }
    public function delete(Request $request)
    {
        $data1 = [];
        $id = DB::table('notices')->where('id', '=', $request->nid)
                                  ->delete();
        $request = $request->semester;
        return redirect()->action(
                                 'NoticeController@index', ['id' => $request]
                                );
    }
    public function update(Request $request)
    {
        $data1 = [];
        //return $request->rid;
        $id = DB::table('notices')
            ->where('id', $request->nid)
            ->where('batch', $request->semester)
            ->update(['course' => $request->edit_cname,
                      'notice' => $request->edit_notice 
                    ]);
        // $id1='32';
        $request = $request->semester;
        return redirect()->action(
                                 'NoticeController@index', ['id' => $request]
                                );
    }
}
