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
            <table class="dataTable" id="example" width="100%">
                <thead>
                <tr class='text-center'>
                    <th></th>
                </tr>
                </thead>
                <?php

                    $cur_date=date("Y/m/d");
                ?>
                <tbody>
                
                @foreach($data1 as $dat)
                <tr>
                    <td>
                        <section class="panel panel-info">
                          <div class="panel-heading light-blue darken-1 white-text">
                            <h4>
                                    <strong>
                                      <font color="white">{{$dat->course}}</font>
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
                                    <p class="fb-user-status">
                                    <li style="list-style-type:disc">
                                        <font color="purple">{{$dat->notice}}</font>
                                    </li>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                @if (Auth::guest())

                                @else
                                  <div class="fb-status-container fb-border">
                                      <div class="fb-time-action">
                                    <button type="submit" class="btn btn-warning btn-md btn-edit" 
                                    data-toggle="modal" data-target="#exampleModal{{$dat->id}}" data-whatever="@mdo">
                                      Edit
                                    </button>

                                    <span></span>
                                    <button type="submit"  
                                      data-toggle="modal" data-target="#deleteModal{{$dat->id}}" data-whatever="@mdo" class="btn btn-danger btn-md btn-edit"> 
                                        Delete
                                    </button>
                                    <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1"    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                  
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <strong class="modal-title">
                                                Are you sure?????
                                              </strong>
                                            </div>
                                            <div class="modal-body">
                                              <form method="POST" action="/notice/delete/{{$request}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="semester" value="{{$request}}">
                                                <input type="hidden" name="nid" value="{{$dat->id}}">
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
                                              Edit Notice
                                            </strong>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="POST" action="/notice/edit/{{$request}}">
                                              {{csrf_field()}}
                                              <input type="hidden" name="semester" value="{{$request}}">
                                              <input type="hidden" name="nid" value="{{$dat->id}}">
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
                                                <input required="" type="text" name="edit_notice" class="form-control"
                                                 value="{{$dat->notice}}">
                                              </div>
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
            <form method="POST" action="\notice\insert\{{$request}}">
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
                <input required="" name="notice_1" type="text" class="form-control"  >
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
