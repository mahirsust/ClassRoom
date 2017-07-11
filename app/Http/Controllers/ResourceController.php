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
        $data1=DB::table('resources')->where('batch', '=', $request)
                                     ->get();
        return view('resource', compact('data1', 'request')); 
    }
    public function save(Request $request)
    {
        $data1 = [];

        $tit1=$request->title_1;
        $len=strlen($tit1);
        if($len>15) $tit1=substr($tit1, 0, 14)."...";

         $id = DB::table('resources')->insertGetId(
            ['batch' => $request->semester, 'course' => $request->cname, 
            'link' => $request->resource_link, 'title' => $tit1]
        );
         $request = $request->semester;
    	$data1=DB::table('resources')->where('batch', '=', $request)
                                     ->get();
        // return $request;
        return redirect()->action(
                                 'ResourceController@index', ['id' => $request]
                                );
        // return view('resource', compact('data1' , 'request'));
    }
    public function delete(Request $request)
    {
        $data1 = [];
        $id = DB::table('resources')->where('id', '=', $request->rid)
                                ->delete();
        $request = $request->semester;
        return redirect()->action(
                                 'ResourceController@index', ['id' => $request]
                                );
    }
    public function update(Request $request)
    {
        $data1 = [];
        
        $tit1=$request->edit_title;
        $len=strlen($tit1);
        if($len>15) 
        {
            $tit1=substr($tit1, 0, 14);
            $tit1.="...";
        }

        $id = DB::table('resources')
            ->where('id', $request->rid)
            ->where('batch', $request->semester)
            ->update(['course' => $request->edit_cname,
                      'title' => $tit1,
                      'link' => $request->edit_link 
                    ]);
        // $id1='32';
        $request = $request->semester;
        return redirect()->action(
                                 'ResourceController@index', ['id' => $request]
                                );
    }
}
