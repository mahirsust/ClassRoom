@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading light-blue darken-3 white-text"><h4><i class="fa fa-user mr-1"></i> Login</div></h4>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        
                            
                            <div class="col-md-offset-2 col-md-8">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    <label for="email" data-error="wrong" data-success="right">Type your email</label>
                                    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-offset-2 col-md-8">
                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <label for="password" data-error="wrong" data-success="right">Type your password</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="col-md-offset-2 col-md-8">
                                
                                    <input type="checkbox" class="filled-in" id="checkbox1" name="remember" {{ old('remember') ? 'checked' : ''}}> 
                                    <label for="checkbox1">  Remember Me</label>
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-8">
                                <button type="submit" class="btn btn-info">
                                    Log in
                                    <i class="fa fa-sign-in ml-1"></i>
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
