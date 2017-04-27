@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Result Table</h4></div>

                <div class="panel-body">
                    <!-- {{ Auth::user()->name }}, You are logged in! -->

                    <table class="display table table-bordered table-stripe">
                        <thead>
                          <tr class="panel-default">
                            <th class="text-center">ID</th>
                            <th  class="text-center">Course Name</th>
                            <th  class="text-center">Link</th>
                            <th  class="text-center">Manage</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data1 as $dat)
                            <tr class="default">
                              <td>
                                <div style="height:100%;width:100%;font-size: 17px;">
                                  {{$dat->id}}.
                                </div>
                              </td>
                              <td>
                                <div style="height:100%;width:100%;font-size: 17px;">
                                    {{$dat->course}}
                                </div>
                              </td>
                              <td>
                              <a href="{{$dat->link}}">
                                <div style="height:100%;width:100%;font-size: 17px;">
                                  {{$dat->title}}
                                </div>
                              </a>
                              </td>
                              <td  class="text-center">
                                <button type="submit" class="btn btn-warning btn-xs btn-edit" 
                                data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="height:20%;width:25%">
                                  Edit
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                          Edit Course Result Link
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="POST" action="\updateit">
                                          {{csrf_field()}}
                                          <div class="form-group">
                                            <label for="recipient-name" class="form-control-label"> 
                                              Course Name:
                                            </label>
                                            <input required="" type="text" name="edit_cname" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="form-group">
                                            <label for="recipient-name" class="form-control-label"> 
                                              Title:
                                            </label>
                                            <input required="" type="text" name="edit_title" class="form-control"
                                             id="recipient-name">
                                          </div>
                                          <div class="form-group">
                                            <label for="recipient-name" class="form-control-label"> 
                                              Result Link:
                                            </label>
                                            <input required="" type="text" name="edit_link" class="form-control" 
                                            id="recipient-name">
                                          </div>
                                        <button type="submit" class="btn btn-primary">
                                          Save
                                        </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-danger btn-xs btn-edit">
                                  Delete
                                </button>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                Add Course Result Link
              </button>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">
                        Add Course Result Link
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="\result\32">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label class="form-control-label"> 
                            Course Name:
                          </label>
                          <input required="" name="cname" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="form-control-label"> 
                            Title
                          </label>
                          <input required="" name="title_1" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="form-control-label"> 
                            Result Link:
                          </label>
                          <input required="" type="text" name="result_link" class="form-control" id="recipient-name">
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
        </div>
    </div>
</div>
@endsection