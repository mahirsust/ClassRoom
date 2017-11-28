@extends('layouts.app_dashboard')

@section('content')
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
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading light-blue darken-1 white-text text-center">
          <header>
            <h1 class="text-center">
              Notice Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
              @if(strlen($request)>2)
              ({{substr($request, 2)}})
              @endif
            </h1>  
          </header>
        </div>
      </div>

      @if(Session::has('alert-success'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-success') }}</strong>
      </div>
      @endif
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <?php

      $cur_date=date("Y/m/d");
      ?>
      @if( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher" or Auth::user()-> type == substr($request, 0,2))
      <div>
        <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
          <i class="fa fa-check" aria-hidden="true"></i>
          Add Notice
        </button>
      </div>
      @endif

      <div>
      </br>
    </div> 
    <!--      Notice Start --> 
    @foreach($data1 as $dat)
    <div class="department-section" style="background-color: white;">
      <div class="department-overview">
        <blockquote class="blockquote bq-danger">
          <h2 class="text"><strong>{{$dat->course}}</strong></h2>
        </blockquote>

        <?php
        if($dat->updated_at == '')
        { 
          $time = date("h:i a",strtotime($dat->created_at));
          $date = date("j F'y",strtotime($dat->created_at));
        }
        else 
        {
          $time = date("h:i a",strtotime($dat->updated_at));
          $date = date("j F'y",strtotime($dat->updated_at));
        }
        ?>

        <div style="margin-left: 10px;">
          <h4 class="text">Date : {{$date}}  at {{$time}}</h4>
        </div>

        <div style="min-height: 20px;">
        </div>

        <div class="fa-ul">
         <li><h5 class=""><i class="fa-li fa fa-square"></i></h5></li>
       </div>

       <div style="margin-left: 30px;">
        <?php
        $notice = $dat->notice;
        echo "<h4>". preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~",
          "<a target='_blank' href=\"\\0\">\\0</a>", $notice)."</h4>";
          ?>  
        </div>
        <div style="min-height: 20px;">      
        </div>
        @if($dat->file_path == "NULL")

        @else
        <div class="text-left attachment-link">
          <a href="{{ url('/notcs/'.$dat->file_path) }}" download class="btn btn-primary btn-sm">
            <i class="fa fa-download fa-lg"></i>
            Download Attachment
          </a>
        </div>
        @endif


        @if( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher" or Auth::user()-> type == substr($request, 0,2))
        <button type="submit" class="btn btn-dark-green btn-sm btn-edit" 
        data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo">
        <i class="fa fa-pencil fa-lg white-text"></i>
        Edit
      </button>

      <button type="submit"  
      data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo" 
      class="btn btn-danger btn-sm btn-edit"> 
      <i class="fa fa-times fa-lg"></i>
      Delete
    </button>

    <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1"    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <strong class="modal-title text-center">
              <h3>Are you sure?</h3>
            </strong>
          </div>
          <div class="modal-body col-md-offset-3">
            <form method="POST" action="{{url('/notice/delete/$request') }}">
              {{csrf_field()}}
              <input type="hidden" name="semester" value="{{$request}}">
              <input type="hidden" name="nid" value="{{$dat->id}}">
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


    <div class="modal fade" id="exampleModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <strong class="modal-title" id="exampleModalLabel">
              Edit Notice
            </strong>
            <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{url('/notice/edit/$request') }}" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="hidden" name="semester" value="{{$request}}">
              <input type="hidden" name="nid" value="{{$dat->id}}">
              <input type="hidden" name="n_date" value="{{$cur_date}}">
              <div class="form-group">
                <label class="form-control-label"> 
                  Title:
                </label>
                <input autofocus required="" type="text" name="edit_cname" value="{{$dat->course}}" 
                class="form-control"  >
              </div>
              <div class="form-group">
                <label class="form-control-label"> 
                  Notice:
                </label>
                <textarea  rows="5" cols="20"  required="" name="edit_notice" type="text" wrap="soft" class="form-control">{{$dat->notice}}</textarea>
              </div>
              <div class="form-group">
                <label   class="form-control-label"> 
                  Upload:
                </label>
                <input type="file" name="edit_file_name" class="filename"  
                >
                (Max Size 10MB)
              </div>
              <button type="submit" class="btn btn-primary btn-md">
                Update
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    @endif

  </div>

  <div style="min-height: 15px;">

  </div>
  <hr style="border-color: red; border-width: 2px;">

  <div style="min-height: 10px;">

  </div>
</div><!-- End Notice-overview --> 

<div style="min-height: 50px;">

</div>
@endforeach
</div>

</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-success">
        <strong class="modal-title" id="myModalLabel">
          Add Notice
        </strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{url('\notice\insert\$request') }}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label class="form-control-label"> 
              Title:
            </label>
            <input required="" name="cname" type="text" class="form-control" autofocus>
          </div>
          <input type="hidden" name="semester" value="{{$request}}">
          <input type="hidden" name="n_date" value="{{$cur_date}}">

          <div class="form-group">
            <label   class="form-control-label"> 
              Notice
            </label>
            <textarea rows="5" cols="20" placeholder="Write Notice..." required="" name="notice_1" type="text"  
            class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label   class="form-control-label"> 
              Upload:
            </label>
            <input type="file" name="file_name" class="filename"  
            >
            (Max Size 10MB)
          </div>

          <button type="submit" class="btn btn-success btn-md">
            Save
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
