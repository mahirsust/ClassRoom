@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
          <div>
              <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                Add Notice
              </button>
          </div>      
          <div>
            </br>
          </div>      
            <table class="dataTable" id="example" width="100%">
                <thead>
                <tr class='text-center'>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($data1 as $dat)
                <tr>
                    <td>
                        <section class="panel panel-info">
                          <div class="panel-heading">
                            <h4>
                                    <strong>
                                      <font color="green">{{$dat->course}}</font>
                                    </strong>
                            </h4>
                          </div>
                            <div class="panel-body">
                                <div class="fb-user-thumb">
                                  
                                </div>
                                <div class="fb-user-details">
                                    <li style="list-style-type:disc">
                                        <font color="blue">{{$dat->notice_date}}</font>  
                                    </li>
                                    <p>
                                    <li style="list-style-type:disc">
                                        <font color="purple">{{$dat->notice}}</font>
                                    </li>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <p class="fb-user-status">
                               
                                   
                                </p>
                                
                                <div class="fb-status-container fb-border">
                                    <div class="fb-time-action">

                                        <button type="submit" class="btn btn-warning btn-xs btn-edit" 
                                  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                    Edit
                                  </button>

                                        <span></span>
                                        <a id="delete"
                                           class="btn btn-xs btn-danger"
                                           href="#"
                                           title="delete your post">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">

                    <form method="POST" action="#">
                                          {{csrf_field()}}
                                          <input type="hidden" name="semester">
                                          <input type="hidden" name="rid" >
                                          <div class="form-group">
                                            <label   class="form-control-label"> 
                                              Course Name:
                                            </label>
                                            
                                             class="form-control"  >
                                          </div>
                                          <div class="form-group">
                                            <label   class="form-control-label"> 
                                              Title:
                                              </label>
                                              <input required="" type="text" name="edit_title" class="form-control" 
                                                >
                                            </div>
                                            <div class="form-group">
                                              <label   class="form-control-label"> 
                                                Resource Link:
                                              </label>
                                              <input required="" type="text" name="edit_link" class="form-control"
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
                      <form method="POST" action="\resource\insert\{{$request}}">
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
                            Notice
                          </label>
                          <input required="" name="title_1" type="text" class="form-control"  >
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
@endsection
