@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading light-blue darken-1 white-text text-center">
                  <h3><strong>
                    Curriculum
                  </strong></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- First Year: Semester I -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls waves-effect waves-light col-4" type="button" data-toggle="collapse" data-target="#11" aria-expanded="false" aria-controls="11">
        First Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="11" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/11" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>
  
  <!-- First Year: Semester II -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#12" aria-expanded="false" aria-controls="12">
        First Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="12" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/12" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Second Year: Semester I -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#21" aria-expanded="false" aria-controls="21">
        Second Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="21" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/21" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Second Year: Semester II -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#22" aria-expanded="false" aria-controls="22">
        Second Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="22" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/22" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Third Year: Semester I -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#31" aria-expanded="false" aria-controls="31">
        Third Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="31" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/31" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Third Year: Semester II -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#32" aria-expanded="false" aria-controls="32">
        Third Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="32" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/32" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Fourth Year: Semester I -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#41" aria-expanded="false" aria-controls="41">
        Fourth Year: Semester I
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="41" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/41" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Fourth Year: Semester II -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#42" aria-expanded="false" aria-controls="42">
        Fourth Year: Semester II
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="42" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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

          <a href="/curriculum/getpdf/42" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- Optional : Option -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#optional" aria-expanded="false" aria-controls="optional">
        Optional : Option
      </button> 
      <div class="col-md-10 col-md-offset-1">
        <div id="optional" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/optional" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

    <!-- 2nd Major Degree -->
    <div class="row">
      
      <button class="btn btn-primary aria-controls col-4 waves-effect waves-light" type="button" data-toggle="collapse" data-target="#2mj" aria-expanded="false" aria-controls="2mj">
        2nd Major Degree
      </button>
      <div class="col-md-10 col-md-offset-1">
        <div id="2mj" class="collapse">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
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
          <a href="/curriculum/getpdf/2mj" 
            <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
            </button>
          </a>
        </div>
      </div>
    </div>

    <div>
      </br>
    </div>

</div>
@endsection