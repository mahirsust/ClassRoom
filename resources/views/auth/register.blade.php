@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form> -->
                    <form id="attributeForm" method="post" class="form-horizontal"
    data-fv-framework="bootstrap"
    data-fv-message="This value is not valid"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">

    <div class="form-group">
        <label class="col-xs-3 control-label">Full name</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name"
                data-fv-row=".col-xs-4"
                data-fv-notempty="true"
                data-fv-notempty-message="The first name is required and cannot be empty" />
        </div>

        <div class="col-xs-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last name"
                data-fv-row=".col-xs-4"
                data-fv-notempty="true"
                data-fv-notempty-message="The last name is required and cannot be empty" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Username</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="username"
                data-fv-message="The username is not valid"

                data-fv-notempty="true"
                data-fv-notempty-message="The username is required and cannot be empty"

                data-fv-regexp="true"
                data-fv-regexp-regexp="^[a-zA-Z0-9_\.]+$"
                data-fv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"

                data-fv-stringlength="true"
                data-fv-stringlength-min="6"
                data-fv-stringlength-max="30"
                data-fv-stringlength-message="The username must be more than 6 and less than 30 characters long" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Email address</label>
        <div class="col-xs-5">
            <input class="form-control" name="email" type="email"
                data-fv-emailaddress="true"
                data-fv-emailaddress-message="The input is not a valid email address" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password"
                data-fv-notempty="true"
                data-fv-notempty-message="The password is required and cannot be empty"

                data-fv-different="true"
                data-fv-different-field="username"
                data-fv-different-message="The password cannot be the same as username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Retype password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="confirmPassword"
                data-fv-notempty="true"
                data-fv-notempty-message="The confirm password is required and cannot be empty"

                data-fv-identical="true"
                data-fv-identical-field="password"
                data-fv-identical-message="The password and its confirm are not the same" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Languages</label>
        <div class="col-xs-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="english"
                        data-fv-notempty="true"
                        data-fv-message="Please specify at least one language you can speak" /> English
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="french" /> French
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="german" /> German
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="russian" /> Russian
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="other" /> Other
                </label>
            </div>
        </div>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#attributeForm').formValidation();
});
</script>
@endsection
