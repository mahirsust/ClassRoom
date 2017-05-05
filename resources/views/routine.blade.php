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
                  <a class="btn btn-success btn-edit" href="#">Edit Class Routine</a>
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
                          
                          $day=date('Y-m-d');
                          $next_day=date('Y-m-d', strtotime($day .' +1 day'));
                          echo $next_day;

                        ?>
                        <tbody>
                          @foreach($data1 as $dat)
                            @if ($next_day == $dat->day) 
                            
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
                            @endif
                          @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success btn-edit" href="#">Edit Tomorrow's Class</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection