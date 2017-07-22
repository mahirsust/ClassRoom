@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info">
                <div class="panel-heading light-blue darken-1 white-text text-center">
                  <h3>
                    <strong>
                      Notice Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
                      @if(strlen($request)>2)
                        ({{substr($request, 2)}})
                      @endif
                      </strong></h3>
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
          @if (Auth::guest())

          @else
            <div>
                <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                  Add Notice
                </button>
            </div>

          @endif

          <div>
            </br>
          </div> 
<!--      Notice Start --> 
          @foreach($data1 as $dat)
          <div class="department-section">
            <div class="department-overview">
            <blockquote class="blockquote bq-danger">
              <h2 class="text"><strong>{{$dat->course}}</strong></h2>
            </blockquote>


            <div style="margin-left: 10px;">
              <h4 class="text">Date : {{$dat->notice_date}}</h4>
            </div>
            
            <div style="min-height: 20px;">
            </div>
            
            <div class="fa-ul">
             <li><i class="fa-li fa fa-square"></i></li>
            </div>

            <div style="margin-left: 30px;">
              {{$dat->notice}}
            </div>

            <div style="min-height: 20px;">      
            </div>
            <div class="text-left attachment-link">
              <a href="http://www.sust.edu/uploads/notice-board/attachment-1476917547.jpg" target="_blank" class="btn btn-primary btn-sm">View Attachment</a>
            </div>

            @if (Auth::guest())

            @else
              <button type="submit" class="btn btn-warning btn-md btn-edit" 
                data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo">
                Edit
              </button>

              <button type="submit"  
                data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo" class="btn btn-danger btn-md btn-edit"> 
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
                        <form method="POST" action="/notice/delete/{{$request}}">
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
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="/notice/edit/{{$request}}" enctype="multipart/form-data">
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
          </div><!-- End Notice-overview --> 
          <hr style="border-color: red;">
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
            <form method="POST" action="\notice\insert\{{$request}}" enctype="multipart/form-data">
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
<!-- <script type="text/javascript">
  $(":file").filestyle({placeholder: "No file"});
</script> -->
</div>
@endsection
