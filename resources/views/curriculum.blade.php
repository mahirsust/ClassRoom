@extends('layouts.app_dashboard')

@section('content')
<head>
  <link href={{ URL::asset('css/curr.css')  }}  rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
</head>

<script type="text/javascript">

/*to make alerts disappear automatically*/
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

<div class="container">
  @if(Session::has('alert-success'))
  <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{ Session::get('alert-success') }}</strong>
  </div>
  @endif

  <?php
  $Semester = array("First Year : Semester I", "First Year : Semester II", "Second Year : Semester I", "Second Year : Semester II", "Third Year : Semester I", "Third Year : Semester II", "Fourth Year : Semester I", "Fourth Year : Semester II",  "Optional : Option", "Second Major Degree");
  $Batch_id= array("11", "12", "21", "22", "31", "32", "41", "42", "optional", "2mj");
  ?>

  <div class="col-md-12 col-sm-6">
    <h3 class="text-center" style="color: blue;">
      <strong>Curriculum</strong>
    </h3>
    <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">

     <?php
     $credits = 0;
     $theory = 0;
     $lab = 0;
     ?>

     <!-- for first panel which is opened initially -->
     <div class="panel">
      <div class="panel-heading" role="tab">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#11" aria-expanded="false" aria-controls="11">
            First Year : Semester I 
          </a>
        </h4>
      </div>
      <div id="11" class="panel-collapse collapse in" role="tabpanel">
        <div class="panel-body">
          <table class="display table table-bordered table-stripe" style="background-color: #fff">
            <thead class="green-text">
              <tr class="panel-default">
                <th class="text-center">Course Code</th>
                <th class="text-center">Course Title</th>
                <th class="text-center">Hours/Week (Theory+Lab)</th>
                <th class="text-center">Credit</th>
                <th class="text-center">Prerequisite</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data1 as $dat)
              @if($dat->batch == "11")

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
                <td class="col-sm">
                  <div class="text-center">

                    <a type="submit" class="teal-text" data-toggle="modal" data-target="#editModal{{$dat->id}}" data-whatever="@mdo" >
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a class="red-text"  type="submit"  
                    data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo">
                    <i class="fa fa-times"></i>
                  </a>
                </div>

                 <!-- Modal for deleting -->
              <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <strong class="modal-title text-center">
                        <h3>Are you sure?</h3>
                      </strong>
                    </div>
                    <div class="modal-body col-md-offset-3">
                      <form method="POST" action="/curriculum/delete">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$dat->id}}">
                        <button style="margin-left: 30px;" type="submit" class="btn btn-primary btn-md">
                          DELETE
                        </button>
                        <button style="margin-left: 10px;" type="submit" data-dismiss="modal" class="btn btn-primary btn-md">
                          CANCEL
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of delete modal  -->

                <!-- Modal for editing -->
                <div class="modal fade" id="editModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <strong class="modal-title" id="editModalLabel">
                          Edit Course
                        </strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <?php 
                        if($a==0) $h = $b;
                        else $h = $a;
                      ?>

                      <div class="modal-body">
                        <form method="POST" action="/curriculum/edit" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <input type="hidden" name="id" value="{{$dat->id}}">
                          <input type="hidden" name="batch" value="{{$dat->batch}}">
                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Course Name:
                            </label>
                            <input autofocus required="" type="text" name="course" value="{{$dat->course}}" 
                            class="form-control"  >
                          </div>
                          
                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Title:
                            </label>
                            <input required="" type="text" name="title" class="form-control" value="{{$dat->title}}" 
                            >
                          </div>
                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Type:
                            </label>
                            <label class="radio-inline">
                              <input required="" type="radio" name="course_type" value="theory" /> Theory
                            </label>
                            <label class="radio-inline">
                                <input required="" type="radio" name="course_type" value="lab" /> Lab
                            </label>
                          </div>
                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Hours:
                            </label>
                            <input required="" type="text" name="hours" class="form-control" value="{{$h}}" 
                            >
                          </div>

                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Credits:
                            </label>
                            <input required="" type="text" name="credits" class="form-control" value="{{$dat->credits}}" 
                            >
                          </div>
                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Prerequisite:
                            </label>
                            <input type="text" name="prerequisite" class="form-control" value="{{$dat->prerequisite}}" 
                            >
                          </div>

                          <button type="submit" class="btn btn-primary btn-md">
                            Update
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endif 
              @endforeach
              <tr class="default">
                <th tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> {{$theory}} + {{$lab}} = {{$theory+$lab}} </td>
                <td tabindex="-1" class="text-center"> {{$credits}} </td>
                <td tabindex="-1" class="text-center">  </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-info btn-md btn-edit" 
          data-toggle="modal" data-target="#addModal" data-whatever="@mdo" style="height:20%;width:20%">
          <i class="fa fa-plus-circle"></i></a>
          Add New 
        </button>

        <!-- modal for adding new course -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title" id="addModalLabel">
                Add Course to First Year : Semester I
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="\curriculum\insert" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <input type="hidden" name="batch" value="11">
                  <div class="form-group">
                    <label   class="form-control-label"> 
                      Course Name:
                    </label>
                    <input autofocus required="" type="text" name="course" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label   class="form-control-label"> 
                      Title:
                    </label>
                    <input required="" type="text" name="title" class="form-control"
                    >
                  </div>
                   <div class="form-group">
                    <label   class="form-control-label"> 
                      Type:
                    </label>
                    <label class="radio-inline">
                      <input required="" type="radio" name="course_type" value="theory" /> Theory
                    </label>
                    <label class="radio-inline">
                      <input required="" type="radio" name="course_type" value="lab" /> Lab
                    </label>
                  </div>
                  <div class="form-group">
                    <label   class="form-control-label"> 
                      Hours:
                    </label>
                    <input required="" type="text" name="hours" class="form-control" 
                    >
                  </div>

                  <div class="form-group">
                    <label   class="form-control-label"> 
                      Credits:
                    </label>
                    <input required="" type="text" name="credits" class="form-control" 
                    >
                  </div>
                  <div class="form-group">
                    <label   class="form-control-label"> 
                      Prerequisite:
                    </label>
                    <input type="text" name="prerequisite" class="form-control" 
                    >
                  </div>

                  <button type="submit" class="btn btn-success btn-md">
                    Save
                  </button>

                </form>
              </div>
            </div>
          </div>
        </div>
         <!-- end of modal for adding course -->
        <a href="/curriculum/getpdf/11">
          <button type="submit" class="btn btn-info btn-md btn-edit" 
          data-toggle="modal" data-whatever="@mdo" style="height:20%;width:20%">
          <i class="fa fa-file-pdf-o"></i>
          Export as PDF  
        </button>
      </a>
    </div>
  </div>
</div> 

<!-- panel for other semester -->

@for($i=1; $i < 10; $i++)
<?php
$sem = $Semester[$i];
$batch = $Batch_id[$i];
?>
<div class="panel">
  <div class="panel-heading" role="tab">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$batch}}" aria-expanded="false" aria-controls="{{$batch}}">
        {{$sem}}
      </a>
    </h4>
  </div>
  <div id="{{$batch}}" class="panel-collapse collapse" role="tabpanel">
    <div class="panel-body">
      <table class="display table table-bordered table-stripe" style="background-color: #fff">
        <thead class="green-text">
          <tr class="panel-default">
            <th class="text-center">Course Code</th>
            <th class="text-center">Course Title</th>
            <th class="text-center">Hours/Week (Theory+Lab)</th>
            <th class="text-center">Credit</th>
            <th class="text-center">Prerequisite</th>
            <th class="text-center">Action</th>
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
            @if(Auth::user() -> type != "student")
              <td class="col-sm">
                <div class="text-center">

                  <a type="submit" class="teal-text" data-toggle="modal" data-target="#editModal{{$dat->id}}" data-whatever="@mdo" >
                    <i class="fa fa-pencil"></i>
                  </a>
                  <a class="red-text"  type="submit"  
                  data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo">
                  <i class="fa fa-times"></i>
                </a>
              </div>

              <!-- Modal for deleting -->
              <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <strong class="modal-title text-center">
                        <h3>Are you sure?</h3>
                      </strong>
                    </div>
                    <div class="modal-body col-md-offset-3">
                      <form method="POST" action="/curriculum/delete">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$dat->id}}">
                        <button style="margin-left: 30px;" type="submit" class="btn btn-primary btn-md">
                          DELETE
                        </button>
                        <button style="margin-left: 10px;" type="submit" data-dismiss="modal" class="btn btn-primary btn-md">
                          CANCEL
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of delete modal  -->

              <!-- Modal for editing -->
              <div class="modal fade" id="editModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <strong class="modal-title" id="editModalLabel">
                        Edit Course
                      </strong>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                   <?php 
                      if($a==0) $h = $b;
                      else $h = $a;
                    ?>
                    <div class="modal-body">
                      <form method="POST" action="/curriculum/edit" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$dat->id}}">
                        <input type="hidden" name="batch" value="{{$batch}}">
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Course Name:
                          </label>
                          <input autofocus required="" type="text" name="course" value="{{$dat->course}}" 
                          class="form-control"  >
                        </div>
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Title:
                          </label>
                          <input required="" type="text" name="title" class="form-control" value="{{$dat->title}}" 
                          >
                        </div>
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Type:
                          </label>
                          <label class="radio-inline">
                            <input required="" type="radio" name="course_type" value="theory" /> Theory
                          </label>
                          <label class="radio-inline">
                            <input required="" type="radio" name="course_type" value="lab" /> Lab
                          </label>
                        </div>
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Hours:
                          </label>
                          <input required="" type="text" name="hours" class="form-control" value="{{$h}}" 
                          >
                        </div>

                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Credits:
                          </label>
                          <input required="" type="text" name="credits" class="form-control" value="{{$dat->credits}}" 
                          >
                        </div>
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Prerequisite:
                          </label>
                          <input type="text" name="prerequisite" class="form-control" value="{{$dat->prerequisite}}" 
                          >
                        </div>

                        <button type="submit" class="btn btn-primary btn-md">
                          Update
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </td>
            @endif
          </tr>
          @endif 
          @endforeach

          <tr class="default">
            <th tabindex="-1" class="text-center">  </th>
            <td tabindex="-1" class="text-center"> Total </td>
            <td tabindex="-1" class="text-center"> {{$theory}} + {{$lab}} = {{$theory+$lab}} </td>
            <td tabindex="-1" class="text-center"> {{$credits}} </td>
            <td tabindex="-1" class="text-center">  </td>
            <td tabindex="-1" class="text-center">  </td>

          </tr>
        </tbody>
      </table>
      <div>
        <button type="submit" class="btn btn-info btn-md btn-edit" 
        data-toggle="modal" data-target="#addModal2" data-whatever="@mdo" style="height:20%;
        width:20%">
        <i class="fa fa-plus-circle"></i></a>
        Add New 
      </button>
      <!-- modal for adding new course -->
      <div class="modal fade" id="addModal2" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <strong class="modal-title" id="addModalLabel">
                Add Course to {{$sem}}
              </strong>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="\curriculum\insert\" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="batch" value="{{$batch}}">
                <div class="form-group">
                  <label   class="form-control-label"> 
                    Course Name:
                  </label>
                  <input autofocus required="" type="text" name="course" class="form-control"  >
                </div>
                <div class="form-group">
                  <label   class="form-control-label"> 
                    Title:
                  </label>
                  <input required="" type="text" name="title" class="form-control"
                  >
                </div>
                 <div class="form-group">
                  <label   class="form-control-label"> 
                    Type:
                  </label>
                  <label class="radio-inline">
                    <input required="" type="radio" name="course_type" value="theory" /> Theory
                  </label>
                  <label class="radio-inline">
                    <input required="" type="radio" name="course_type" value="lab" /> Lab
                  </label>
                </div>
                <div class="form-group">
                  <label   class="form-control-label"> 
                    Hours:
                  </label>
                  <input required="" type="text" name="hours" class="form-control" 
                  >
                </div>
                <div class="form-group">
                  <label   class="form-control-label"> 
                    Credits:
                  </label>
                  <input required="" type="text" name="credits" class="form-control" 
                  >
                </div>
                <div class="form-group">
                  <label   class="form-control-label"> 
                    Prerequisite:
                  </label>
                  <input type="text" name="prerequisite" class="form-control" 
                  >
                </div>

                <button type="submit" class="btn btn-success btn-md">
                  Save
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end of modal for adding course -->

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
  <!-- end of wrap -->

</div>

</div> 
@endfor
<!-- end of panel -->


</div>
<!-- end of #accordion -->



</div>
<!-- end of wrap -->

</div>
@endsection