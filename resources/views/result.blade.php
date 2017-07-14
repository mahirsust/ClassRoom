@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">
                  <h3>
                    <strong>
                      Result Table - {{substr($request, 0, 1)}}/{{substr($request, 1, 1)}}
                      @if(strlen($request)>2)
                        ({{substr($request, 2)}})
                      @endif
                      </strong></h3>
                </div>
                <div class="panel-body">
                    <table class="display table table-bordered table-stripe">
                        <thead>
                          <tr class="panel-default">
                            <th class="text-center">ID</th>
                            <th  class="text-center">Course Name</th>
                            <th  class="text-center">Link</th>
                            @if (Auth::guest())

                            @else
                            <th  class="text-center">Manage</th>

                            @endif
                          </tr>
                        </thead>
                        <?php $inc=0;  ?>
                        <tbody>
                          @foreach($data1 as $dat)
                            <tr class="default">
                              <td>
                                <div class="text-center" style="height:100%;width:100%;font-size: 17px;">
                                  {{$inc=$inc+1}}
                                </div>
                              </td>
                              <td>
                                <div class="text-center" style="height:100%;width:100%;font-size: 17px;">
                                    {{$dat->course}}
                                </div>
                              </td>
                              <td>
                              <a href="{{$dat->link}}">
                                <div class="text-center" style="height:100%;width:100%;font-size: 17px;">
                                  {{$dat->title}}
                                </div>
                              </a>
                              </td>
                              @if (Auth::guest())

                              @else
                              <td>
                                <div class="text-center">
                                  <button type="submit" class="btn btn-warning btn-xs btn-edit" 
                                  data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo" style="height:20%;width:20%">
                                    Edit
                                  </button>
                                  <button type="submit"  
                                  data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo" class="btn btn-danger btn-xs btn-edit" style="height:20%;width:20%">
                                    Delete
                                  </button>
                                </div>
                                <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <strong class="modal-title">
                                          Are you sure?????
                                        </strong>
                                      </div>
                                      <div class="modal-body">
                                        <form method="POST" action="/result/delete/{{$request}}">
                                          {{csrf_field()}}
                                          <input type="hidden" name="semester" value="{{$request}}">
                                          <input type="hidden" name="rid" value="{{$dat->id}}">
                                        <button type="submit" class="btn btn-primary">
                                          DELETE
                                        </button>
                                        <button type="submit" data-dismiss="modal" class="btn btn-primary">
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
                                          Edit Course Result Link
                                        </strong>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="POST" action="/result/edit/{{$request}}">
                                          {{csrf_field()}}
                                          <input type="hidden" name="semester" value="{{$request}}">
                                          <input type="hidden" name="rid" value="{{$dat->id}}">
                                          <div class="form-group">
                                            <label   class="form-control-label"> 
                                              Course Name:
                                            </label>
                                            <input autofocus="edit_cname" required="" type="text" name="edit_cname" value="{{$dat->course}}" class="form-control"  >
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
                                              Result Link:
                                            </label>
                                            <input required="" type="text" name="edit_link" class="form-control"
                                            value="{{$dat->link}}"
                                             >
                                          </div>
                                        <button type="submit" class="btn btn-primary">
                                          Update
                                        </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>

                            @endif

                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @if (Auth::guest())

            @else
              <div>
                <button type="submit" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                  Add Course Result Link
                </button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <strong class="modal-title" id="myModalLabel">
                          Add Course Result Link
                        </strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="\result\insert\{{$request}}">
                        {{csrf_field()}}
                          <div class="form-group">
                            <label class="form-control-label"> 
                              Course Name:
                            </label>
                            <input required="" name="cname" type="text" class="form-control" autofocus="cname">
                          </div>
                          <input type="hidden" name="semester" value="{{$request}}">

                          <div class="form-group">
                            <label   class="form-control-label"> 
                              Title
                            </label>
                            <input required="" name="title_1" type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label  class="form-control-label"> 
                              Result Link:
                            </label>
                            <input required="" type="text" name="result_link" class="form-control"  >
                          </div>
                          <button type="submit" class="btn btn-success">
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