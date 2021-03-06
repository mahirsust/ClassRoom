  @extends('layouts.app_dashboard')

  @section('content')
  <style type="text/css">
     @media (min-width: 768px) {
      .modal-xl {
        width: 98%;
       /*max-width:1200px;*/
      }
    }
    }
  </style> 
  <script type="text/javascript">
/*to make alerts disappear automatically*/
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

  <div class="container">

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        @if(Session::has('alert-success'))
        <div class="alert alert-success alert-dismissable fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{ Session::get('alert-success') }}</strong>
        </div>
        @endif


        <div class="panel panel-info">
          <div class="panel-heading light-blue darken-1 white-text text-center">
            <header>
              @if($request == "12a" or $request == "12b")
                <h1 class="text-center">
                  Routine Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
                  @if(strlen($request)>2)
                    (Section {{strtoupper(substr($request, 2))}})
                  @endif
                </h1>
              @else
              <h1 class="text-center">
                Routine Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
                 <!--  @if(strlen($request)>2)
                    ({{substr($request, 2)}})
                  @endif -->
              </h1>
              @endif  
            </header>
          </div>
            @if($data1=="NULL") 
            @if(Session::has('alert-notfound'))
            <div class="alert alert-warning alert-dismissable fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>{{ Session::get('alert-notfound') }}</strong>
            </div>
            @endif

            @else    
            <div class="panel-body">
              <table class="display table table-bordered table-stripe table-hover">
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
              @if( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher" or Auth::user()-> type == substr($request, 0,2))
              <button type="submit" class="btn btn-info btn-md btn-edit" 
              data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo" style="height:20%;width:20%">
              <i class="fa fa-pencil"></i>
              Edit 
            </button>
            @endif
           
            <a href="{{ url('/routine/getpdf/' .$request) }}" >
            <button type="submit" class="btn btn-info btn-md btn-edit" 
            data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">

            <i class="fa fa-file-pdf-o"></i>
            Export as PDF

          </button>
        </a>

        <!-- Form for edit routine -->

        <div class="modal fade" id="exampleModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title" id="exampleModalLabel">
                  Edit Routine
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form method="POST" action="{{ url('/routine/edit1/'.$request) }}">
                  {{csrf_field()}}
                  <input type="hidden" name="batch" value="{{$request}}">
                  <table class="display table table-bordered table-stripe table-hover">
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
                        <input type="hidden" name="day[]" value="{{$dat->day}}">
                        <th tabindex="-1" class="text-center"> {{$dat->day}} </th>
                        <td tabindex="-1" class="text-center"> 
                          <input autofocus="eightnine" required="" type="text" name="eightnine[]" value="{{$dat->eightnine}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="nineten[]" value="{{$dat->nineten}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="teneleven[]" value="{{$dat->teneleven}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="eleventwelve[]" value="{{$dat->eleventwelve}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="twelveone[]" value="{{$dat->twelveone}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="onetwo[]" value="{{$dat->onetwo}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="twothree[]" value="{{$dat->twothree}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="threefour[]" value="{{$dat->threefour}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="fourfive[]" value="{{$dat->fourfive}}"
                        </td>     

                      </tr>
                      @endforeach
                    </tbody>
                  </table>

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

    <div class="panel panel-info">
      <?php 

      date_default_timezone_set('Asia/Dhaka');
      $cur_time = date('H');
      $next = 0;
      if($cur_time>=17) $next=1;
      $cur_day=date('D');
      $cur_day=strtoupper($cur_day);
      if($next==1)
      { 
        if($cur_day=='SUN') $day='MON';
        else if($cur_day=='MON') $day='TUE';
        else if($cur_day=='TUE') $day='WED';
        else if($cur_day=='WED') $day='THU';
        else if($cur_day=='THU') $day='SUN';
        else if($cur_day=='FRI') $day='SUN';
        else if($cur_day=='SAT') $day='SUN';
      }
      else $day = $cur_day;
      if($cur_day=='FRI' or $cur_day=='SAT')
      {
        $day='SUN';
        $next = 2;

      } 
                  //echo $day;
      ?>
      @if($next==1)
        <div class="panel-heading light-blue darken-1 white-text text-center">
          <header>
            <h4 class="text-center">
              <strong> Tomorrow's Routine </strong>
            </h4>  
          </header>
        </div>
      
      @elseif($next==2)
        <div class="panel-heading light-blue darken-1 white-text text-center">
          <header>
            <h4 class="text-center">
              <strong> Sunday's Routine </strong>
            </h4>  
          </header>
        </div>
    
      @else
        <div class="panel-heading light-blue darken-1 white-text text-center">
          <header>
            <h4 class="text-center">
             <strong> Today's Routine </strong>
            </h4>  
          </header>
        </div>
    
      @endif 

      <div class="panel-body">
        <table class="display table table-bordered table-stripe table-hover">
          @if($next==0)
         (Tomorrow's routine can be edited after 5PM)
         @endif
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

            <?php 

            $f=0;
            ?>
            @foreach($data2 as $dat)
            @if ($day == $dat->day) 
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
            @if ($day == $dat->day) 
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

         @if( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher" or Auth::user()-> type == substr($request, 0,2))
          <button type="submit" class="btn btn-info btn-md btn-edit" 
          data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo" style="height:20%;width:20%">
            <i class="fa fa-pencil"></i></a>
            Edit 
          </button>
        @endif

        <div class="modal fade" id="exampleModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title" id="exampleModalLabel">
                  Edit Routine
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" >
                <form method="POST" action="{{ url('/routine/edit/'.$request) }}">
                  {{csrf_field()}}
                  <input type="hidden" name="batch" value="{{$request}}">
                  <table class="display table table-bordered table-stripe table-hover">
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
                      
                      <tr class="default">
                        
                        <th tabindex="-1" class="text-center"> {{$dat->day}} </th>
                        <td tabindex="-1" class="text-center"> 
                          <input autofocus="eightnine" required="" type="text" name="eightnine" value="{{$dat->eightnine}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="nineten" value="{{$dat->nineten}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="teneleven" value="{{$dat->teneleven}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="eleventwelve" value="{{$dat->eleventwelve}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="twelveone" value="{{$dat->twelveone}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="onetwo" value="{{$dat->onetwo}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="twothree" value="{{$dat->twothree}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="threefour" value="{{$dat->threefour}}"
                        </td>
                        <td tabindex="-1" class="text-center"> 
                          <input required="" type="text" name="fourfive" value="{{$dat->fourfive}}"
                        </td>     

                      </tr>
                      
                    </tbody>
                  </table>
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
    @endif
  </div>
</div>
</div>
@endsection