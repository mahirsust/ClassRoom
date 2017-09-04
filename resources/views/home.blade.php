@extends('layouts.app_dashboard')

@section('content')
<!-- <div class="container">
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
</div> -->
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
       <!--  <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Caption Hover Effects - Demo 2</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/captionhover/css/default.css" /> -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/captionhover/css/component.css" />
        <style type="text/css">
        .scrollToTop {
  display: none;
  position: fixed;
  bottom: 15px;
  right: 20px;
  z-index: 99;
  border: none;
  outline: none;
  text-align:center;
  line-height:5px;
  width:50px;
  height:50px;
  -webkit-border-radius:3px;
  /*background-color: #fff;*/
  color: #00a6eb;
  /*cursor: pointer;*/
  /*padding: 20px;*/
  border-radius: 10px;
}
/*#a9fd00*/
.scrollToTop:hover {
  background-color: #00a6eb;
  color: white;
}
    </style>
        <style type="text/css">
    body{
    /*background-image: url('{{ asset('images/ws_WhatsApp_Background_1920x1080.jpg') }}');*/
    background-color: #fafafa;
 }
  </style>
        <script src="{{url('/')}}/captionhover/js/modernizr.custom.js"></script>  
</head>
<body>
<a class="scrollToTop">
        <i class="fa fa-angle-up" style="font-size: 30px;margin-top: 9px;"></i>
       
    </a>
    <div class="container demo-2">
            <!-- Top Navigation -->
           <!--  <div class="codrops-top clearfix">
                <a class="codrops-icon codrops-icon-prev" href="">
                    <span>Previous Demo</span>
                </a>
                <span class="right">
                    <a class="codrops-icon codrops-icon-drop" href="">
                        <span>Back to the Codrops Article</span>
                    </a>
                </span>
            </div> -->
            <header>
                <h1 class="text-center">Caption Hover Effects</h1>  
            </header>
            <ul class="grid cs-style-2">
                <li>
                    <figure>
                        <img src="{{url('/')}}/captionhover/images/2.png" alt="img02">
                        <figcaption>
                            <h3>Music</h3>
                            <span>Jacob Cummings</span>
                            <a href="">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="{{url('/')}}/captionhover/images/4.png" alt="img04">
                        <figcaption>
                            <h3>Settings</h3>
                            <span>Jacob Cummings</span>
                            <a href="">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="{{url('/')}}/captionhover/images/6.png" alt="img06">
                        <figcaption>
                            <h3>Game Center</h3>
                            <span>Jacob Cummings</span>
                            <a href="">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="{{url('/')}}/captionhover/images/5.png" alt="img05">
                        <figcaption>
                            <h3>Safari</h3>
                            <span>Jacob Cummings</span>
                            <a href="">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="{{url('/')}}/captionhover/images/3.png" alt="img03">
                        <figcaption>
                            <h3>Phone</h3>
                            <span>Jacob Cummings</span>
                            <a href="">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="{{url('/')}}/captionhover/images/1.png" alt="img01">
                        <figcaption>
                            <h3>Camera</h3>
                            <span>Jacob Cummings</span>
                            <a href="">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div><!-- /container-->
        <script src="{{url('/')}}/captionhover/js/toucheffects.js"></script>
        </body>
 </html>
        
@endsection
