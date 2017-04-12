@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Routine</div>

                <div class="panel-body">
                    <!-- {{ Auth::user()->name }}, You are logged in! -->
                    <h2>Routine Table</h2>

  <table class="table">
    <thead>
      <tr class="success">
        <th>Day</th>
        <th>8 AM</th>
        <th>9 AM</th>
        <th>10 AM</th>
        <th>11 AM</th>
        <th>12 AM</th>
        <th>1 PM</th>
        <th>2 PM</th>
        <th>3 PM</th>
        <th>4 PM</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>sun</td>
        @foreach($data as $data)
          <td> {{$data->eightnine}} </td>
        @endforeach
        <td>John</td>
        <td>Doe</td>
        <td>john</td>
      </tr>
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection