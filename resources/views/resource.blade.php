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
    <div class="col-md-10 col-md-offset-1">
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
      <div class="panel panel-info">
        <div class="panel-heading light-blue darken-1 white-text text-center">
          <header>
            <h1 class="text-center">
              Resource Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
              @if(strlen($request)>2)
              ({{substr($request, 2)}})
              @endif
            </h1>  
          </header>
        </div>
        
        <div class="panel-body">
          <table class="display table table-bordered table-stripe table-hover">
            <thead style="color: green;">
              <tr class="panel-default">
                <th class="text-center" >ID</th>
                <th class="text-center" >Course Name</th>
                <th class="text-center" >Title</th>
                <th class="text-center" >Action</th>
              </tr>
            </thead>
            <?php $inc=0;  ?>
            <tbody>
              @foreach($data1 as $dat)
              <tr class="default">
                <td>
                  <div class="text-center" style="font-size: 17px;">
                    {{$inc=$inc+1}}
                  </div>
                </td>
                <td>
                  <div class="text-center" style="font-size: 17px;">
                    {{$dat->course}}
                  </div>
                </td>
                <td>
                  <div class="text-center" style="font-size: 17px;">
                    {{$dat->title}}
                  </div>
                </a>
              </td>
              
              <td class="col-sm">
                <div class="text-center">
                  <a style="margin-right: 20px;" href="/resources/{{$dat->link}}" download="/resources/{{$dat->link}}">
                    <button class="btn btn-primary btn-sm btn-edit">
                      <i class="glyphicon glyphicon-save fa-lg"></i>
                      Download
                    </button>
                  </a>
                  
                  @if( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher" or Auth::user()-> type == substr($request, 0,2))
                  <a type="submit" data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo" >
                    <button class="btn btn-dark-green btn-sm btn-edit">
                      <i class="fa fa-pencil fa-lg white-text"></i>
                      Edit
                    </button>
                  </a>

                  <a style="margin-left: 20px;" class="red-text"  type="submit"  
                  data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo">
                  <button class="btn btn-danger btn-sm btn-edit">
                    <i class="fa fa-times fa-lg"></i>
                    Delete
                  </button>
                </a>
              </div>

              <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <strong class="modal-title text-center">
                        <h3>Are you sure?</h3>
                      </strong>
                    </div>
                    <div class="modal-body col-md-offset-3">
                      <form method="POST" action="/resource/delete/{{$request}}">
                        {{csrf_field()}}
                        <input type="hidden" name="semester" value="{{$request}}">
                        <input type="hidden" name="rid" value="{{$dat->id}}">
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
                        Edit Course Resource Link
                      </strong>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="/resource/edit/{{$request}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="semester" value="{{$request}}">
                        <input type="hidden" name="rid" value="{{$dat->id}}">
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Course Name:
                          </label>
                          <input autofocus required="" type="text" name="edit_cname" value="{{$dat->course}}" 
                          class="form-control"  >
                        </div>
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Title:
                          </label>
                          <input required="" type="text" name="edit_title" class="form-control" value="{{$dat->title}}" 
                          >
                        </div>
                        <div class="form-group">
                          <label   class="form-control-label"> 
                            Upload:
                          </label>
                          <input required="" type="file" name="edit_file_name" class="filename"  
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
            </td>
            

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @if( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher" or Auth::user()-> type == substr($request, 0,2))
  <div>
    <button type="submit" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
      Add Course Resource Link
    </button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <strong class="modal-title" id="myModalLabel">
              Add Course Resource Link
            </strong>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="\resource\insert\{{$request}}" enctype="multipart/form-data">
              {{csrf_field()}}


              <div class="form-group">
                <label class="form-control-label"> 
                  Course Name:
                </label>
                <input required="" name="cname" type="text" class="form-control" autofocus>
              </div>
              <input type="hidden" name="semester" value="{{$request}}">

              <div class="form-group">
                <label   class="form-control-label"> 
                  Title
                </label>
                <input required="" name="title_1" type="text" class="form-control"  >
              </div>

              <div class="form-group">
                <label   class="form-control-label"> 
                  Upload:
                </label>
                <input required="" type="file" name="file_name" class="filename"  >
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
  @endif

</div>
</div>
</div>
@endsection
