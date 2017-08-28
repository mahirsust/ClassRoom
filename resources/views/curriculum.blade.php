@extends('layouts.app_dashboard')

@section('content')
<head>
  <link href={{ URL::asset('css/curr.css')  }}  rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
</head>
<div class="container">
    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading light-blue darken-1 white-text text-center">
                  <h3><strong>
                    Curriculum
                  </strong></h3>
                </div>
            </div>
        </div>
      </div> -->

      <?php
      $Semester = array("First Year : Semester I", "First Year : Semester II", "Second Year : Semester I", "Second Year : Semester II", "Third Year : Semester I", "Third Year : Semester II", "Fourth Year : Semester I", "Fourth Year : Semester II",  "Optional : Option", "Second Major Degree");
      $Batch_id= array("11", "12", "21", "22", "31", "32", "41", "42", "optional", "2mj");
      ?>

      <div class="col-md-12 col-sm-6">
        <h3 class="text-center" style="color: blue;">
          <strong>Curriculum</strong>
        </h3>
        <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
          @for($i=0; $i < 10; $i++)
          <?php
          $sem = $Semester[$i];
          $batch = $Batch_id[$i];
          $credits = 0;
          $theory = 0;
          $lab = 0;
          ?>
          <div class="panel">
            <div class="panel-heading" role="tab">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$batch}}" aria-expanded="false" aria-controls="{{$batch}}">
                  {{$sem}}
                </a>
              </h4>
            </div>
            <div id="{{$batch}}" class="panel-collapse collapse in" role="tabpanel">
              <div class="panel-body">
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
                    @if($dat->batch==$batch)

                    <?php 
                    $credits += + (double) $dat->credits;
                    sscanf($dat->hours, '%[0-9,] + %[0-9,]', $a, $b);
                    $theory  += $a;
                    $lab += $b;
                    ?>

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
                      <td tabindex="-1" class="text-center"> {{$theory}} + {{$lab}} = {{$theory+$lab}} </td>
                      <td tabindex="-1" class="text-center"> {{$credits}} </td>
                      <td tabindex="-1" class="text-center">  </td>
                    </tr>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-info btn-md btn-edit" 
                data-toggle="modal" data-target="#editModal{{$dat->batch}}" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-pencil"></i></a>
                Edit 
              </button>
              <a href="/curriculum/getpdf/{{$batch}}">
                <button type="submit" class="btn btn-info btn-md btn-edit" 
                data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
                <i class="fa fa-file-pdf-o"></i>
                Export as PDF  
              </button>
            </a>
          </div>
        </div>
      </div> 
      @endfor
      <!-- end of panel -->

                <!-- Edit Modal -->
          <div class="modal fade" id="editModal{{$dat->batch}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <strong class="modal-title" id="editModalLabel">
                    Edit Curriculum
                  </strong>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <form method="POST" action="/curriculum/edit/{{$dat->batch}}">
                    <!-- {{$dat->batch}} -->

                    @foreach($data1 as $d)
                      @if($d->batch==$dat->batch)

                      {{csrf_field()}}
                      <input type="hidden" name="batch" value="{{$dat->batch}}">

                      <div class="form-group">
                        <div class="col-xs-4">
                          <input autofocus="course_code" required="" type="text" name="course_code[]" value="{{$d->course}}"
                        </div>

                        <div class="col-xs-4">
                          <input required="" type="text" name="title[]" value="{{$d->title}}"
                        </div>

                        <div class="col-xs-2">
                          <input required="" type="text" name="hours[]" value="{{$d->hours}}"
                        </div>

                        <div class="col-xs-1">
                          <input required="" type="text" name="credits[]" value="{{$d->credits}}"
                        </div>
                        <div class="col-xs-1">
                          <input type="text" name="prerequisite[]" value="{{$d->prerequisite}}"
                        </div>
                      </div>
                      @endif
                    @endforeach 


                    <button type="submit" class="btn btn-primary">
                      Update
                    </button>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end of edit modal  -->



    </div>
    <!-- end of #accordion -->
    


  </div>
  <!-- end of wrap -->

</div>
@endsection