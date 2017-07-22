<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Result;

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
         $this->validate($request, [
            'file_name' => 'required|max:10000|mimes:doc,docx,xlsx,gif,svg,csv,xls,jpeg,png,jpg,zip,pdf,7z,rar,ppt,pptx']);
        $tit1=$request->title_1;
        $file= $request->file('file_name');
        $extension = $request->file('file_name')->getClientOriginalExtension();
       
        $len=strlen($tit1);
        if($len>15) $tit1=substr($tit1, 0, 14)."...";

        if($file = $request->hasFile('file_name')) {
            $file = $request->file('file_name') ;
            $fileName = $file->getClientOriginalName() ;
            echo $fileName;
            $destinationPath = public_path().'/results/' ;
            $file->move($destinationPath,$fileName);
        }
        $result = new Result;
        $result->batch = $request->semester;
        $result->course = $request->cname; 
        $result->link = $fileName;
        $result->title = $tit1;
        $result->save();

        $request->session()->flash('alert-success', 'Result is added succesfully!');
        $request = $request->semester;
        return redirect()->action('ResultController@index', ['id' => $request]);
    }
    public function delete(Request $request)
    {
        $data = Result::find($request->rid);
        $data->delete();
        $request->session()->flash('alert-success', 'Result is deleted succesfully!');
        $request = $request->semester;
        return redirect()->action('ResultController@index', ['id' => $request]);
    }
    public function update(Request $request)
    {
       $this->validate($request, [
            'edit_file_name' => 'required|max:10000|mimes:doc,docx,xlsx,gif,svg,csv,xls,jpeg,png,jpg,zip,pdf,7z,rar,ppt,pptx']);
        $tit1=$request->edit_title;
        $file= $request->file('edit_file_name');
        //$extension = $request->file('file_name')->getClientOriginalExtension();

        $len=strlen($tit1);
        if($len>15) $tit1=substr($tit1, 0, 14)."...";

        if($file = $request->hasFile('edit_file_name')) {
            $file = $request->file('edit_file_name') ;
            $fileName = $file->getClientOriginalName() ;
            echo $fileName;
            $destinationPath = public_path().'/results/' ;
            $file->move($destinationPath,$fileName);
        }
        $edit_res = Result::find($request->rid);
        $edit_res->course = $request->edit_cname;
        $edit_res->title  = $tit1;
        $edit_res->link = $fileName; 
        $edit_res->save();
        $request->session()->flash('alert-success', 'Result is updated succesfully!');
        $request = $request->semester;
        return redirect()->action( 'ResultController@index', ['id' => $request]);
    }
}
