@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                  <h3>
                    <strong>
                      Curriculum  
                    </strong>
                  </h3>
                </div>
            </div>
        </div>
    </div>
    
    <!-- First Year: Semester I -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #demo">First Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="demo" class="collapse">
          <table class="display table table-bordered table-stripe">
            <thead>
              <tr class="panel-default">
                <th class="text-center">Course Code</th>
                <th class="text-center">Course Title</th>
                <th class="text-center">Hours/Week (Theory+Lab)</th>
                <th class="text-center">Credit</th>
                <th class="text-center">Prerequisite</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data1 as $dat)
              <tr class="default">

                  <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                  <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                  <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                  <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                  <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- First Year: Semester II -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #demo">First Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="demo" class="collapse">
          <table class="display table table-bordered table-stripe">
            <thead>
              <tr class="panel-default">
                <th class="text-center">Course Code</th>
                <th class="text-center">Course Title</th>
                <th class="text-center">Hours/Week (Theory+Lab)</th>
                <th class="text-center">Credit</th>
                <th class="text-center">Prerequisite</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data1 as $dat)
              <tr class="default">

                  <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                  <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                  <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                  <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                  <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

</div>
@endsection