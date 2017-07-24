<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Routine;
use PDF;
class RoutineController extends Controller
{
    public function index($request)
    {
        $data1=[];
        $data1=DB::table('routines')->where('batch', '=', $request)->get();
        $data2=[];
        $data2=DB::table('tomorrows')->where('batch', '=', $request)->get();
        if($data1->count() == 0) 
        {
            $data1 = "NULL";
            return view('routine', compact('data1', 'data2', 'request'))->with('alert-notfound', 'No routine data!');
        }
        //if($data2->count()) $data2 = "NULL";
        //
        else return view('routine', compact('data1', 'data2', 'request')); 
    }
    public function update(Request $request)
    {
        DB::table('tomorrows')->where('batch', $request->batch)
            ->update(['eightnine' => $request->eightnine, 
                'nineten' => $request->nineten,
                'teneleven' => $request->teneleven,
                'eleventwelve' => $request->eleventwelve,
                'twelveone' => $request->twelveone,
                'onetwo' => $request->onetwo,
                'twothree' => $request->twothree,
                'threefour' => $request->threefour,
                'fourfive' => $request->fourfive]);
        $request->session()->flash('alert-success', 'Routine is updated succesfully!');
       
        return redirect()->action('RoutineController@index', ['id' => $request->batch]);
    }
    public function getPDF($request)
    {
        /*echo "this is";
        echo $request;*/
        $routine = Routine::where('batch', '=', $request)->get();;
        $pdf = PDF::loadView('routinegenerate', ['routine'=>$routine]);
        return $pdf->download('routine.pdf');
    }
}