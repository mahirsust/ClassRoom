@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                  <h3>
                    <strong>
                      Routine Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
                      @if(strlen($request)>2)
                        ({{substr($request, 2)}})
                      @endif
                      </strong></h3>
                </div>
                <div class="panel-body">
                    <table class="display table table-bordered table-stripe">
                        <thead>
                          <tr class="panel-default">
                            <th class="text-center">Day</th>
                            <th class="text-center">8 AM</th>
                            <th class="text-center">9 AM</th>
                            <th class="text-center">10 AM</th>
                            <th class="text-center">11 AM</th>
                            <th class="text-center">12 PM</th>
                            <th class="text-center">1 PM</th>
                            <th class="text-center">2 PM</th>
                            <th class="text-center">3 PM</th>
                            <th class="text-center">4 PM</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data1 as $dat)
                          <tr class="default">

                              <th tabindex="-1" class="text-center"> {{$dat->day}} </th>
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->onetwo}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>         
                  
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
              
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Tomorrow's Class</h4></div>

                <div class="panel-body">
                    <table class="display table table-bordered table-stripe">
                        <thead>
                          <tr class="panel-default">
                            <th class="text-center">Day</th>
                            <th class="text-center">8 AM</th>
                            <th class="text-center">9 AM</th>
                            <th class="text-center">10 AM</th>
                            <th class="text-center">11 AM</th>
                            <th class="text-center">12 PM</th>
                            <th class="text-center">1 PM</th>
                            <th class="text-center">2 PM</th>
                            <th class="text-center">3 PM</th>
                            <th class="text-center">4 PM</th>
                          </tr>
                        </thead>
                        <?php 
                          
                          date_default_timezone_set('Asia/Dhaka');
                          $cur_day=date('D');
                          $cur_day=strtoupper($cur_day);
                          if($cur_day=='SUN') $next_day='MON';
                          else if($cur_day=='MON') $next_day='TUE';
                          else if($cur_day=='TUE') $next_day='WED';
                          else if($cur_day=='WED') $next_day='THU';
                          else if($cur_day=='THU') $next_day='SUN';
                          else if($cur_day=='FRI') $next_day='SUN';
                          else if($cur_day=='SAT') $next_day='SUN';
                          //echo $next_day;
                        ?>
                        <tbody>
                         
                          <?php 
                          
                          $f=0;
                          ?>
                          @foreach($data2 as $dat)
                            @if ($next_day == $dat->day) 
                               <?php $f=1 ?>
                              <tr class="default">

                                  <th tabindex="-1" class="text-center"> {{$dat->day}} </th>
                                  <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->onetwo}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                                  <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>         
                      
                              </tr>
                             
                      
                            @else
                            <?php
                               DB::table('tomorrows')->where('batch', '=', $dat->batch)->delete();
                             ?>
                            @endif 
                          @endforeach
                          @if ($f==0)
                              @foreach($data1 as $dat)
                                @if ($next_day == $dat->day) 
                                  <?php
                                    DB::table('tomorrows')->insert(
                                    ['batch' => $dat->batch, 'day' => $dat->day, 'eightnine' => $dat->eightnine, 
                                     'nineten' => $dat->nineten,
                                      'teneleven' => $dat->teneleven,
                                       'eleventwelve' => $dat->eleventwelve,
                                        'twelveone' => $dat->twelveone,
                                         'onetwo' => $dat->onetwo,
                                          'twothree' => $dat->twothree,
                                           'threefour' => $dat->threefour,
                                            'fourfive' => $dat->fourfive]);
                                  ?>
                                  <tr class="default">

                                      <th tabindex="-1" class="text-center"> {{$dat->day}} </th>
                                      <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->onetwo}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                                      <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>         
                                 </tr>
                                <?php break; ?>
                                @endif 
                              @endforeach
                          @endif
                         
                        </tbody>
                    </table>
                    @if (Auth::guest())

                    @else
                      <button type="submit" class="btn btn-warning btn-xs btn-edit" 
                          data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo" style="height:50%;width:20%">
                            Edit Tomorrow's Class
                      </button>
                      
                    @endif

                    <div class="modal fade" id="exampleModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <strong class="modal-title" id="exampleModalLabel">
                              Edit Tomorrow's Routine
                            </strong>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="/routine/edit/{{$request}}">
                              {{csrf_field()}}
                              <input type="hidden" name="batch" value="{{$request}}">
                              <div class="form-group">
                                <label   class="form-control-label"> 
                                  8AM
                                </label>
                                <input autofocus="eightnine" required="" type="text" name="eightnine" value="{{$dat->eightnine}}" class="form-control"  >
                              </div>
                              <div class="form-group">
                                <label   class="form-control-label"> 
                                  9AM
                                </label>
                                <input required="" type="text" name="nineten" value="{{$dat->nineten}}" class="form-control"  >
                              </div>
                              <div class="form-group">
                                <label   class="form-control-label"> 
                                  10AM
                                </label>
                                <input required="" type="text" name="teneleven" value="{{$dat->teneleven}}" class="form-control"  >
                              </div>
                              <div class="form-group">
                                <label   class="form-control-label"> 
                                  11AM
                                </label>
                                <input required="" type="text" name="eleventwelve" value="{{$dat->eleventwelve}}" class="form-control"  >
                              </div>
                              <div class="form-group">
                                <label   class="form-control-label"> 
                                  12PM
                                </label>
                                <input required="" type="text" name="twelveone" value="{{$dat->twelveone}}" class="form-control"  >
                              </div>
                              <div class="form-group">
                                <label   class="form-control-label"> 
                                  1PM
                                </label>
                                <input required="" type="text" name="onetwo" value="{{$dat->onetwo}}" class="form-control"  >
                              </div>
                               <div class="form-group">
                                <label   class="form-control-label"> 
                                  2PM
                                </label>
                                <input required="" type="text" name="twothree" value="{{$dat->twothree}}" class="form-control"  >
                              </div>
                               <div class="form-group">
                                <label   class="form-control-label"> 
                                  3PM
                                </label>
                                <input required="" type="text" name="threefour" value="{{$dat->threefour}}" class="form-control"  >
                              </div>
                               <div class="form-group">
                                <label   class="form-control-label"> 
                                  4PM
                                </label>
                                <input required="" type="text" name="fourfive" value="{{$dat->fourfive}}" class="form-control"  >
                              </div>
                            <button type="submit" class="btn btn-primary">
                              Update
                            </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection