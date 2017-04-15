@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Routine Table</div>

                <div class="panel-body">
                    <!-- {{ Auth::user()->name }}, You are logged in! -->

                    <table class="table">
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
                          <tr class="success">
                            <td>SUN</td>
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
                          <tr class="success">
                            <td>MON</td>
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
                          <tr class="success">
                            <td>TUE</td>
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
                          <tr class="success">
                            <td>WED</td>
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
                          <tr class="success">
                            <td>THU</td>
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
            <div class="panel panel-default">
                <div class="panel-heading">Tomorrow's Class</div>

                <div class="panel-body">
                    <table class="table">
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
                          <tr class="success">
                            <td>SUN</td>
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