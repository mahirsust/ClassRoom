@extends('layouts.app_dashboard')
 
<script type="text/javascript">
  /*to make alerts disappear automatically*/
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
    });
  }, 4000);
</script>
 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading light-blue darken-1 white-text text-center">
          <header>
            <h1 class="text-center">Admin Desk</h1>  
          </header>
        </div>
      </div>
 
       <?php
        $user = Auth::user() -> type;
      ?>

      @if(Session::has('alert-success'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-success') }}</strong>
      </div>
      @endif
 
       @if(Session::has('alert-danger'))
      <div class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-danger') }}</strong>
      </div>
      @endif
 
      <div>
        <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal" data-whatever="@mdo">
          Assign Role To A User
        </button>
      </div>
 
      <div>
      </br>
    </div>
 
    <!-- User Start -->
    <table class="display table table-bordered table-stripe table-hover" style="background-color: white;">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Name</th>
          <th class="text-center">Email</th>
          <th class="text-center">Role</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <?php $inc=0;  ?>
      <tbody>
        @foreach($data1 as $dat)

        @if($dat->type == "super admin" and $user != "super admin")
          <?php  
          continue;
          ?>
        @endif

        @if($dat->type != "student")
        <?php
        if($dat->type == "11")
          $d = "CR (1/1)";
 
        else  if($dat->type == "12")
          $d = "CR (1/2)";
 
        else  if($dat->type == "21")
          $d = "CR (2/1)";
 
        else  if($dat->type == "22")
          $d = "CR (2/2)";
 
        else  if($dat->type == "31")
          $d = "CR (3/1)";
 
        else  if($dat->type == "32")
          $d = "CR (3/2)";
 
        else  if($dat->type == "41")
          $d = "CR (4/1)";
 
        else  if($dat->type == "42")
          $d = "CR (4/2)";
        else $d = ucfirst($dat->type)
          ?>
        <tr>
          <th class="text-center" scope="row">{{$inc=$inc+1}}</th>
          <td class="text-center">{{$dat->name}}</td>
          <td class="text-center">{{$dat->email}}</td>
          <td class="text-center">{{$d}}</td>
          <td class="text-center">
            @if($d != "Teacher")
            <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#editModal{{$dat->id}}">Edit</button>
            @endif
            <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#deleteModal{{$dat->id}}">Delete</button>
          </td>
        </tr>
 
         <!-- modal for adding -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title" id="addModalLabel">
                  Add New
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <form  method="POST" action="{{url('/admin_desk/addnew') }}">
                  {{csrf_field()}}
                   <div class="form-inline">
                    <label   class="form-control-label">
                      Email:
                    </label>
                    <input required="" type="text" name="email" class="form-control" autofocus="">
                  </div>
 
                  <div class="form-inline">
                    <label class="mr-sm-2" for="inlineFormCustomSelectPref">Role:</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref" name="type" required="">
                      <option selected disabled value="">Choose...</option>
                      @if($user == "super admin")
                      <option value="super admin">Super Admin</option>
                      @endif
                      <option value="teacher">Teacher</option>
                      <option value="11">CR (1/1)</option>
                      <option value="12">CR (1/2)</option>
                      <option value="21">CR (2/1)</option>
                      <option value="22">CR (2/2)</option>
                      <option value="31">CR (3/1)</option>
                      <option value="32">CR (3/2)</option>
                      <option value="41">CR (4/1)</option>
                      <option value="42">CR (4/2)</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success btn-sm">
                    Save
                  </button>
 
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end of add modal -->
 
        <!-- modal for editing -->
        <div class="modal fade" id="editModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title" id="exampleModalLabel">
                  Edit Role
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
 
                <form  method="POST" action="{{url('/admin_desk/update') }}">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$dat->id}}">
                  <div class="form-inline">
                    <label class="mr-sm-2" for="inlineFormCustomSelectPref">Preference:</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref" name="type" required="">
                      <option selected disabled value="">Choose...</option>
                       @if($user == "super admin")
                      <option value="super admin">Super Admin</option>
                      @endif
                       <option value="teacher">Teacher</option>
                      <option value="11">CR (1/1)</option>
                      <option value="12">CR (1/2)</option>
                      <option value="21">CR (2/1)</option>
                      <option value="22">CR (2/2)</option>
                      <option value="31">CR (3/1)</option>
                      <option value="32">CR (3/2)</option>
                      <option value="41">CR (4/1)</option>
                      <option value="42">CR (4/2)</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">
                    Update
                  </button>
 
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end of edit modal -->
 
        <!-- Modal for deleting -->
        <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <strong class="modal-title text-center">
                  <h3>Are you sure you want to delete role of this user?</h3>
                </strong>
              </div>
              <div class="modal-body col-md-offset-3">
                <form method="POST" action="{{url('/admin_desk/delete') }}">
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