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
                            <th>Day</th>
                            <th>8 AM</th>
                            <th>9 AM</th>
                            <th>10 AM</th>
                            <th>11 AM</th>
                            <th>12 AM</th>
                            <th>2 PM</th>
                            <th>3 PM</th>
                            <th>4 PM</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="default">
                            <th>SUN</th>
                            @foreach($data as $dat)
                              <td> {{$dat->eightnine}} </td>
                              <td> {{$dat->nineten}} </td>
                              <td> {{$dat->teneleven}} </td>
                              <td> {{$dat->eleventwelve}} </td>
                              <td> {{$dat->twelveone}} </td>
                              <td> {{$dat->twothree}} </td>
                              <td> {{$dat->threefour}} </td>
                              <td> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>MON</th>
                            @foreach($data as $dat)
                              <td> {{$dat->eightnine}} </td>
                              <td> {{$dat->nineten}} </td>
                              <td> {{$dat->teneleven}} </td>
                              <td> {{$dat->eleventwelve}} </td>
                              <td> {{$dat->twelveone}} </td>
                              <td> {{$dat->twothree}} </td>
                              <td> {{$dat->threefour}} </td>
                              <td> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>TUE</th>
                            @foreach($data as $dat)
                              <td> {{$dat->eightnine}} </td>
                              <td> {{$dat->nineten}} </td>
                              <td> {{$dat->teneleven}} </td>
                              <td> {{$dat->eleventwelve}} </td>
                              <td> {{$dat->twelveone}} </td>
                              <td> {{$dat->twothree}} </td>
                              <td> {{$dat->threefour}} </td>
                              <td> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>WED</th>
                            @foreach($data as $dat)
                              <td> {{$dat->eightnine}} </td>
                              <td> {{$dat->nineten}} </td>
                              <td> {{$dat->teneleven}} </td>
                              <td> {{$dat->eleventwelve}} </td>
                              <td> {{$dat->twelveone}} </td>
                              <td> {{$dat->twothree}} </td>
                              <td> {{$dat->threefour}} </td>
                              <td> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                          <tr class="default">
                            <th>THU</th>
                            @foreach($data as $dat)
                              <td> {{$dat->eightnine}} </td>
                              <td> {{$dat->nineten}} </td>
                              <td> {{$dat->teneleven}} </td>
                              <td> {{$dat->eleventwelve}} </td>
                              <td> {{$dat->twelveone}} </td>
                              <td> {{$dat->twothree}} </td>
                              <td> {{$dat->threefour}} </td>
                              <td> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Tomorrow's Class</h4></div>

                <div class="panel-body">
                    <table class="display table table-bordered table-stripe">
                        <thead>
                          <tr class="panel-default">
                            <th>Day</th>
                            <th>8 AM</th>
                            <th>9 AM</th>
                            <th>10 AM</th>
                            <th>11 AM</th>
                            <th>12 AM</th>
                            <th>2 PM</th>
                            <th>3 PM</th>
                            <th>4 PM</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="default">
                            <th>SUN</th>
                            @foreach($data as $dat)
                              <td> {{$dat->eightnine}} </td>
                              <td> {{$dat->nineten}} </td>
                              <td> {{$dat->teneleven}} </td>
                              <td> {{$dat->eleventwelve}} </td>
                              <td> {{$dat->twelveone}} </td>
                              <td> {{$dat->twothree}} </td>
                              <td> {{$dat->threefour}} </td>
                              <td> {{$dat->fourfive}} </td>         

                            @endforeach
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection