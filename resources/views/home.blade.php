@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading light-blue darken-1 white-text"><h4>Home</div></h4>

                <div class="panel-body">
                @if (Auth::guest())

                @else
                    {{ Auth::user()->name }} is logged in!

                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
