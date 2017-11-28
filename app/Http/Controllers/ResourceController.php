<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Resource;
use File;
use Session;
use Redirect;


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
       $this->validate($request, [
            'file_name' => 'required|max:10240|mimes:txt,doc,docx,xlsx,gif,svg,csv,xls,jpeg,png,jpg,zip,pdf,7z,rar,ppt,pptx']);
        $tit1=$request->title_1;
        $file= $request->file('file_name');
        $extension = $request->file('file_name')->getClientOriginalExtension();

        /*$len=strlen($tit1);
        if($len>15) $tit1=substr($tit1, 0, 14)."...";*/

        if($file = $request->hasFile('file_name')) {
            $file = $request->file('file_name') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = (base_path('/resrc')) ;
            $file->move($destinationPath,$fileName);
        }
        $resource = new Resource;
        $resource->batch = $request->semester;
        $resource->course = $request->cname; 
        $resource->link = $fileName;
        $resource->title = $tit1;
        $resource->save();

        $request->session()->flash('alert-success', 'Resource is added succesfully!');
        $request = $request->semester;
        return redirect()->action('ResourceController@index', ['id' => $request]);
    }
    public function delete(Request $request)
    {
        $data = Resource::find($request->rid);
        $data->delete();

        $folder=$request->property;
        $destinationPath = '/resrc/';
        $destinationPath = $destinationPath.$request->link;
        //return $destinationPath;
        File::delete($destinationPath);

        $request->session()->flash('alert-success', 'Resource is deleted succesfully!');
         $request = $request->semester;
        return redirect()->action('ResourceController@index', ['id' => $request]);
    }
    public function update(Request $request)
    {
       $this->validate($request, [
            'edit_file_name' => 'required|max:10240|mimes:txt,doc,docx,xlsx,gif,svg,csv,xls,jpeg,png,jpg,zip,pdf,7z,rar,ppt,pptx']);
        $tit1=$request->edit_title;
        $file= $request->file('edit_file_name');
        //$extension = $request->file('file_name')->getClientOriginalExtension();

        /*$len=strlen($tit1);
        if($len>15) $tit1=substr($tit1, 0, 14)."...";*/

        if($file = $request->hasFile('edit_file_name')) {
            $file = $request->file('edit_file_name') ;
            $fileName = $file->getClientOriginalName() ;
            //echo $fileName;
            $destinationPath = (base_path('/resrc')) ;
            $file->move($destinationPath,$fileName);
        }
        $edit_res = Resource::find($request->rid);
        $edit_res->course = $request->edit_cname;
        $edit_res->title  = $tit1;
        $edit_res->link = $fileName; 
        $edit_res->save();
        $request->session()->flash('alert-success', 'Resource is updated succesfully!');
        $request = $request->semester;
        return redirect()->action( 'ResourceController@index', ['id' => $request]);
    }
}
