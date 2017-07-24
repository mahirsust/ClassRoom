<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notice;

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
       
       $this->validate($request, [
        'file_name' => 'max:10240|mimes:doc,jpg,docx,xlsx,gif,svg,csv,xls,jpeg,png,zip,pdf,7z,rar,ppt,pptx']);
        
        $file= $request->file('file_name');
      
        if($file = $request->hasFile('file_name')) {
            $file = $request->file('file_name') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/notices/' ;
            $file->move($destinationPath,$fileName);
        }
        else{
            $fileName="NULL";
        }
        $notice = new Notice;
        $notice->batch = $request->semester;
        $notice->course = $request->cname; 
        $notice->notice_date = $request->n_date;
        $notice->notice = $request->notice_1;
        $notice->file_path = $fileName; 
        
        $notice->save();
         $request->session()->flash('alert-success', 'Resource is added succesfully!');
         $request = $request->semester;
        return redirect()->action('NoticeController@index', ['id' => $request]);
       
    }
    public function delete(Request $request)
    {
       
        $data = Notice::find($request->nid);
        $data->delete();
        $request->session()->flash('alert-success', 'Notice is deleted succesfully!');
        $request = $request->semester;
        return redirect()->action('NoticeController@index', ['id' => $request]);
    }
    public function update(Request $request)
    {
        $data = Notice::find($request->nid);
        $data->delete();

         $this->validate($request, [
            'edit_file_name' => 'max:10240|mimes:doc,jpg,docx,xlsx,gif,svg,csv,xls,jpeg,png,zip,pdf,7z,rar,ppt,pptx']);
        
        $file= $request->file('edit_file_name');
      
        if($file = $request->hasFile('edit_file_name')) {
            $file = $request->file('edit_file_name') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/notices/' ;
            $file->move($destinationPath,$fileName);
        }
        else{
            $fileName = "NULL";
        }

        $notice = new Notice;
        $notice->batch = $request->semester;
        $notice->course = $request->edit_cname; 
        $notice->notice_date = $request->n_date;
        $notice->notice = $request->edit_notice;
        $notice->file_path = $fileName; 
        $notice->save();
         $request->session()->flash('alert-success', 'Notice is updated succesfully!');
        $request = $request->semester;
        return redirect()->action('NoticeController@index', ['id' => $request]);
    }
}
