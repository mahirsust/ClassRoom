@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info">
                <div class="panel-heading light-blue darken-1 white-text text-center">
                  <h3>
                    <strong>
                      Admin Desk
                      </strong></h3>
                </div>
          </div>
          <!-- @if(Session::has('alert-success'))
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
        @endif -->
            <?php

        $cur_date=date("Y/m/d");
      ?>
    
          
            <div>
                <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                  Add User
                </button>
            </div>

          <div>
            </br>
          </div> 

          <!-- User Start --> 
            <table class="table table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Batch</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <?php $inc=0;  ?>
              <tbody>
                @foreach($data1 as $dat)
                  @if($dat->batch==="11" OR
                    $dat->batch==="12" OR
                      $dat->batch==="21" OR
                        $dat->batch==="22" OR
                          $dat->batch==="31" OR
                            $dat->batch==="32" OR
                              $dat->batch==="41" OR
                                $dat->batch==="42")
                    <tr>
                        <th scope="row">{{$inc=$inc+1}}</th>
                        <td>{{$dat->name}}</td>
                        <td>{{$dat->email}}</td>
                        <td>{{$dat->password}}</td>
                        <td>{{substr($dat->batch, 0, 1)}}/{{substr($dat->batch, 1, 1)}}</td>
                        <td>
                            <a class="teal-text"><i class="fa fa-pencil" ></i></a>
                            <a class="red-text"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @else
                    @endif
                @endforeach
              </tbody>
            </table>
        </div>

      </div>
    

<!-- <script type="text/javascript">
  $(":file").filestyle({placeholder: "No file"});
</script> -->
</div>
@endsection
