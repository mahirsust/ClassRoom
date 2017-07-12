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
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #11">First Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="11" class="collapse">
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
                @if($dat->batch=="11")
                  <tr class="default">
                      <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                      <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                      <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                      <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                      <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>
                  </tr>
                @endif
              @endforeach
              <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 14 + 14 = 28 </td>
                <td tabindex="-1" class="text-center"> 21 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>
  
  <!-- First Year: Semester II -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #12">First Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="12" class="collapse">
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
              @if($dat->batch=="12")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 12 + 14 = 26 </td>
                <td tabindex="-1" class="text-center"> 19 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Second Year: Semester I -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #21">Second Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="21" class="collapse">
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
              @if($dat->batch=="21")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 15 + 10 = 25 </td>
                <td tabindex="-1" class="text-center"> 20 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Second Year: Semester II -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #22">Second Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="22" class="collapse">
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
              @if($dat->batch=="22")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 15 + 11 = 26 </td>
                <td tabindex="-1" class="text-center"> 20.5 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Third Year: Semester I -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #31">Third Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="31" class="collapse">
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
              @if($dat->batch=="31")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 15 + 15 = 30 </td>
                <td tabindex="-1" class="text-center"> 22.5 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Third Year: Semester II -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #32">Third Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="32" class="collapse">
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
              @if($dat->batch=="32")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 14 + 16 = 30 </td>
                <td tabindex="-1" class="text-center"> 22 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Fourth Year: Semester I -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #41">Fourth Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="41" class="collapse">
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
              @if($dat->batch=="41")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 11 + 16 = 27 </td>
                <td tabindex="-1" class="text-center"> 19 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Fourth Year: Semester II -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #42">Fourth Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="42" class="collapse">
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
              @if($dat->batch=="42")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 6 + 16 = 22 </td>
                <td tabindex="-1" class="text-center"> 14 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Optional : Option -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #optional">Optional : Option
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="optional" class="collapse">
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
              @if($dat->batch=="optional")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 30 + 30 = 60 </td>
                <td tabindex="-1" class="text-center"> 45 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- 2nd Major Degree -->
    <div class="row">
      
      <button type="button" class="btn btn-info col-md-10 col-md-offset-1" data-toggle="collapse" data-target="  #2mj">2nd Major Degree
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="2mj" class="collapse">
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
              @if($dat->batch=="2mj")
                <tr class="default">
                    <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
                    <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
                    <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>        
                </tr>
              @endif
            @endforeach
            <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> 22 + 25 = 47 </td>
                <td tabindex="-1" class="text-center"> 36 </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

</div>
@endsection