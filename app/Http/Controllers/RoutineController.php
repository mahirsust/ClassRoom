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
        else return view('routine', compact('data1', 'data2', 'request'))->withTitle('request'); 
    }
    public function update(Request $request)
    {
        DB::table('tomorrows')->where('batch','=', $request->batch)
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
    public function update1(Request $request)
    {
        for($i=0; $i<5; $i++)
        {
            DB::table('routines')->where('batch', '=', $request->batch)->where('day', '=', $request->day[$i])
            ->update(['eightnine' => $request->eightnine[$i], 
                'nineten' => $request->nineten[$i],
                'teneleven' => $request->teneleven[$i],
                'eleventwelve' => $request->eleventwelve[$i],
                'twelveone' => $request->twelveone[$i],
                'onetwo' => $request->onetwo[$i],
                'twothree' => $request->twothree[$i],
                'threefour' => $request->threefour[$i],
                'fourfive' => $request->fourfive[$i]]);

        }
        $request->session()->flash('alert-success', 'Routine is updated succesfully!');
        return redirect()->action('RoutineController@index', ['id' => $request->batch]);
    }
    public function getPDF($request)
    {
        /*echo "this is";
        echo $request;*/
        $routine = Routine::where('batch', '=', $request)->get();;
        $pdf = PDF::loadView('routinegenerate', ['routine'=>$routine, 'id'=>$request]);
        $name = 'routine'.$request.'.pdf';
        return $pdf->download($name);
    }
}