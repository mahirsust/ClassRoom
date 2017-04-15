@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Resource Table</div>

                <div class="panel-body">
                    <!-- {{ Auth::user()->name }}, You are logged in! -->

                    <table class="table">
                        <thead>
                          <tr class="panel-default">
                            <th>Course Name</th>
                            <th>Link</th>
                            <th>Manage</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="success">
                            <td>
                              <div style="height:100%;width:100%;font-size: 17px;">
                                  CSE 336
                              </div>
                            </td>
                            <td>
                              <a href="https://drive.google.com/drive/folders/0Bzhp-HcCbo85SDZTRlN1d2ZCeVU">
                                <div style="height:100%;width:100%;font-size: 17px;">
                                  1st Chapter
                                </div>
                              </a>
                            </td>
                            <td>
                              <button type="submit" class="btn btn-primary" data-toggle="modal"         data-target="#exampleModal" data-whatever="@mdo" style="height:25%;  
                              width:30%">
                                Edit
                              </button>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">
                                        Edit Course Resourse Link
                                      </h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label for="recipient-name" class="form-control-label"> 
                                            Subject:
                                          </label>
                                          <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                          <label for="recipient-name" class="form-control-label"> 
                                            Resource Link:
                                          </label>
                                          <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">
                                        Save
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                Add Course Resourse Link
              </button>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">
                        Add Course Resourse Link
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="recipient-name" class="form-control-label"> 
                            Course Name:
                          </label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="form-control-label"> 
                            Subject:
                          </label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="form-control-label"> 
                            Resource Link:
                          </label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn btn-primary">
                        Save
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection