<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Class Room Management</title>

    <!-- <div id="ascrail2001" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 138px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
  <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="css/bootstrap-reset.css" rel="stylesheet"> 
  <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/typicons.min.css" rel="stylesheet">
  <link href="css/typicons.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet"> -->
  <link href="{{url('/')}}/css/mdb.min.css" rel="stylesheet">

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link rel="shortcut icon" href="{{url('/')}}/images/cse2.png">

  <!-- <style type="text/css">
body, html {
    height: 100%;
    margin: 0;
    background-image: url("images/IICT/IICT (2).jpg");
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
</style> -->


    <!-- <style type="text/css">
        body {
            background-color: lightgreen;
        }
    </style> -->

 <style type="text/css">
        .scrollToTop {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
.scrollToTop:hover {
  background-color: #555;
}
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
</head>
<body>
    <a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i>Top</a>
    <!-- <div id="app"> -->
        <nav class="navbar fixed-top navbar-dark blue darken-3 white-text">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app_dashboard.name', 'Class Room Management') }}
                    </a>

                </div>
                
                <!-- admin task -->    
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Home</a></li> -->
                        
                    <li><a href="{{ url('/home')}}" class="blue darken-3 white-text">
                                Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" aria-expanded="true">
                                    Routine <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-primary" role="menu">
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/11a')}}">1/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/11b')}}">1/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/12a')}}">1/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/12b')}}">1/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/21a')}}">2/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/21b')}}">2/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/22a')}}">2/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/22b')}}">2/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/31a')}}">3/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/31b')}}">3/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/32a')}}">3/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/32b')}}">3/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/41a')}}">4/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/41b')}}">4/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/42a')}}">4/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/42b')}}">4/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/51a')}}">5/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/51b')}}">5/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/52a')}}">5/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/52b')}}">5/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/11')}}">1/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/12')}}">1/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/21')}}">2/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/22')}}">2/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/31')}}">3/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/32')}}">3/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/41')}}">4/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/42')}}">4/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/51')}}">5/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/52')}}">5/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Resource <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu dropdown-primary" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/resource/11a')}}">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/11b')}}">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/12a')}}">1/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/12b')}}">1/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/21a')}}">2/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/21b')}}">2/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/22a')}}">2/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/22b')}}">2/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/31a')}}">3/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/31b')}}">3/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/32a')}}">3/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/32b')}}">3/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/41a')}}">4/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/41b')}}">4/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/42a')}}">4/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/42b')}}">4/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/41a')}}">5/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/41b')}}">5/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/42a')}}">5/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/42b')}}">5/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/11')}}">1/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/12')}}">1/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/21')}}">2/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/22')}}">2/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/31')}}">3/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/41')}}">4/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/42')}}">4/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/51')}}">5/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/52')}}">5/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Result <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu dropdown-primary" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/result/11a')}}">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/11b')}}">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/12a')}}">1/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/12b')}}">1/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/21a')}}">2/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/21b')}}">2/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/22a')}}">2/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/22b')}}">2/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/31a')}}">3/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/31b')}}">3/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/32a')}}">3/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/32b')}}">3/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41a')}}">4/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41b')}}">4/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42a')}}">4/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42b')}}">4/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41a')}}">5/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41b')}}">5/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42a')}}">5/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42b')}}">5/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/11')}}">1/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/12')}}">1/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/21')}}">2/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/22')}}">2/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/31')}}">3/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41')}}">4/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42')}}">4/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41')}}">5/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42')}}">5/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Notice <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu dropdown-primary" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/notice/11a')}}">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/11b')}}">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/12a')}}">1/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/12b')}}">1/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/21a')}}">2/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/21b')}}">2/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/22a')}}">2/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/22b')}}">2/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/31a')}}">3/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/31b')}}">3/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/32a')}}">3/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/32b')}}">3/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/41a')}}">4/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/41b')}}">4/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/42a')}}">4/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/42b')}}">4/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/41a')}}">5/1(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/41b')}}">5/1(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/42a')}}">5/2(a)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/42b')}}">5/2(b)</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/11')}}">1/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/12')}}">1/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/21')}}">2/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/22')}}">2/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/31')}}">3/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/41')}}">4/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/42')}}">4/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/41')}}">5/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/notice/42')}}">5/2</a></li>
                            </ul>
                        
                    </li>
                    <li>
                        <a href="{{ url('/curriculum')}}" class="blue darken-3 white-text">
                            Curriculum
                        </a>
                        
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Info About IICT <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Ground Floor</a></li>
                                <li><a class="dropdown-item" href="#">1st Floor</a></li>
                                <li><a class="dropdown-item" href="#">2nd Floor</a></li>
                                <li><a class="dropdown-item" href="#">3rd Floor</a></li>
                                <li><a class="dropdown-item" href="#">Add Floor</a></li>
                            </ul>
                        
                    </li> -->
                </ul>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}" class="blue darken-3 white-text">
                                Login</a></li>
                            <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                        @else
                            <li><a href="{{ url('/register') }}" class="blue darken-3 white-text">Register</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user mr-1"></i> 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
  <!--   </div> -->
        @yield('content')

    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{url('/')}}/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url('/')}}/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{url('/')}}/js/mdb.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});
    </script>

</body>
</html>
