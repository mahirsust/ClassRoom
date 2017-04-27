@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Routine Table</h4></div>

                <div class="panel-body">
                    <!-- {{ Auth::user()->name }}, You are logged in! -->

                    <table class="display table table-bordered table-stripe">
                        <thead>
                          <tr class="panel-default">
                            <th class="text-center">Day</th>
                            <th class="text-center">8 AM</th>
                            <th class="text-center">9 AM</th>
                            <th class="text-center">10 AM</th>
                            <th class="text-center">11 AM</th>
                            <th class="text-center">12 AM</th>
                            <th class="text-center">2 PM</th>
                            <th class="text-center">3 PM</th>
                            <th class="text-center">4 PM</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="default">
                            <th>SUN</th>
                            @foreach($data as $dat)
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>MON</th>
                            @foreach($data as $dat)
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>       

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>TUE</th>
                            @foreach($data as $dat)
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>      

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>WED</th>
                            @foreach($data as $dat)
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td> 

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>THU</th>
                            @foreach($data as $dat)
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>        

                            @endforeach
                          </tr>
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
                            <th class="text-center">12 AM</th>
                            <th class="text-center">2 PM</th>
                            <th class="text-center">3 PM</th>
                            <th class="text-center">4 PM</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="default">
                            <th>SUN</th>
                            @foreach($data as $dat)
                              <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
                              <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>       

                            @endforeach
                          </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-success btn-edit" href="#">Edit Tomorrow's Class</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection