<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A service for CSE-SUST">
    <meta name="keywords" content="crm">
    <meta name="author" content="MeemMahir">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Class Room Management</title>

    <!-- <div id="ascrail2001" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 138px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/css2/test.css')}}" rel="stylesheet">
    <link href="{{asset('/css/mdb.min.css')}}" rel="stylesheet">

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="shortcut icon" href="{{asset('/images/cse6.png')}}">


  <style type="text/css">
    body{
    /*background-image: url('{{ asset('images/ws_WhatsApp_Background_1920x1080.jpg') }}');*/
    background-color: #EEEEEE;
 }
  </style>

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

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
</head>
<body>
    <a class="scrollToTop">
        <i class="fa fa-angle-up" style="font-size: 30px;margin-top: 9px;"></i>
       
    </a>
    <!-- <div id="app"> -->
    <div class="navbar navbar-fixed-top navbar-dark blue darken-3 white-text">
        <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle white-text" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app_dashboard.name', 'Class Room Management') }}
                </a>

            </div>
            <div class="navbar-collapse collapse">
                <!-- admin task -->    
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Home</a></li> -->
                    
                    <li><a href="{{url('/')}}" class="blue darken-3 white-text">
                        Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" aria-expanded="true">
                            Routine <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-primary" role="menu" 
                            aria-labelledby="dropdownMenu">

                            <li class="dropdown-submenu">
                            <a tabindex="-1">First Year</a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="{{ url('/routine/11a')}}">1/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/11b')}}">1/1(b)</a></li> -->
                                    <li><a class="dropdown-item" href="{{ url('/routine/12a')}}">Section A</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/12b')}}">Section B</a></li>
                                  <!--   <li><a class="dropdown-item" href="{{ url('/routine/11')}}">1/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/12')}}">1/2</a></li> -->
                                </ul>
                            </li>
                             
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/routine/22a')}}">Second Year</a>
                               <!--  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/routine/21a')}}">2/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/21b')}}">2/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/22a')}}">2/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/22b')}}">2/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/21')}}">2/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/22')}}">2/2</a></li>
                                </ul> -->
                            </li>

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/routine/32a')}}">Third Year</a>
                               <!--  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/routine/31a')}}">3/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/31b')}}">3/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/32a')}}">3/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/32b')}}">3/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/31')}}">3/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/32')}}">3/2</a></li>
                                </ul> -->
                            </li>                        

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/routine/41a')}}">Fourth Year</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/routine/41a')}}">4/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/41b')}}">4/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/42a')}}">4/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/42b')}}">4/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/41')}}">4/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/routine/42')}}">4/2</a></li>
                                </ul> -->
                            </li>

                        </ul>              
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" aria-expanded="true">
                            Resource <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-primary" role="menu" 
                            aria-labelledby="dropdownMenu">
                        
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">First Year</a>
                                <ul class="dropdown-menu">
                                   <!--  <li><a class="dropdown-item" href="{{ url('/resource/11a')}}">1/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/11b')}}">1/1(b)</a></li> -->
                                    <li><a class="dropdown-item" href="{{ url('/resource/12a')}}">Section A</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/12b')}}">Section B</a></li>
                                    <!-- <li><a class="dropdown-item" href="{{ url('/resource/11')}}">1/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/12')}}">1/2</a></li> -->
                                </ul>
                            </li>
                             
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/resource/22')}}">Second Year</a>
                               <!--  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/resource/21a')}}">2/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/21b')}}">2/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/22a')}}">2/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/22b')}}">2/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/21')}}">2/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/22')}}">2/2</a></li>
                                </ul> -->
                            </li>

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/resource/32')}}">Third Year</a>
                               <!--  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/resource/31a')}}">3/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/31b')}}">3/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/32a')}}">3/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/32b')}}">3/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/31')}}">3/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/32')}}">3/2</a></li>
                                </ul> -->
                            </li>                        

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/resource/41')}}">Fourth Year</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/resource/41a')}}">4/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/41b')}}">4/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/42a')}}">4/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/42b')}}">4/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/41')}}">4/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/resource/42')}}">4/2</a></li>
                                </ul> -->
                            </li>

                        </ul>              
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" aria-expanded="true">
                            Result <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-primary" role="menu" 
                            aria-labelledby="dropdownMenu">

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">First Year</a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="{{ url('/result/11a')}}">1/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/11b')}}">1/1(b)</a></li> -->
                                    <li><a class="dropdown-item" href="{{ url('/result/12a')}}">Section A</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/12b')}}">Section B</a></li>
                                   <!--  <li><a class="dropdown-item" href="{{ url('/result/11')}}">1/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/12')}}">1/2</a></li> -->
                                </ul>
                            </li>
                             
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/result/22')}}">Second Year</a>
                              <!--   <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/result/21a')}}">2/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/21b')}}">2/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/22a')}}">2/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/22b')}}">2/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/21')}}">2/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/22')}}">2/2</a></li>
                                </ul> -->
                            </li>

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/result/32')}}">Third Year</a>
                               <!--  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/result/31a')}}">3/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/31b')}}">3/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/32a')}}">3/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/32b')}}">3/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/31')}}">3/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/32')}}">3/2</a></li>
                                </ul> -->
                            </li>                        

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/result/41')}}">Fourth Year</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/result/41a')}}">4/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/41b')}}">4/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/42a')}}">4/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/42b')}}">4/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/41')}}">4/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/result/42')}}">4/2</a></li>
                                </ul> -->
                            </li>

                        </ul>              
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue darken-3 white-text" data-toggle="dropdown" aria-expanded="true">
                            Notice <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level dropdown-primary" role="menu" 
                            aria-labelledby="dropdownMenu">
                            
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">First Year</a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="{{ url('/notice/11a')}}">1/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/11b')}}">1/1(b)</a></li> -->
                                    <li><a class="dropdown-item" href="{{ url('/notice/12a')}}">Section A</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/12b')}}">Section B</a></li>
                                    <!-- <li><a class="dropdown-item" href="{{ url('/notice/11')}}">1/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/12')}}">1/2</a></li> -->
                                </ul>
                            </li>
                             
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/notice/22')}}">Second Year</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/notice/21a')}}">2/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/21b')}}">2/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/22a')}}">2/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/22b')}}">2/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/21')}}">2/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/22')}}">2/2</a></li>
                                </ul> -->
                            </li>

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/notice/32')}}">Third Year</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/notice/31a')}}">3/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/31b')}}">3/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/32a')}}">3/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/32b')}}">3/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/31')}}">3/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/32')}}">3/2</a></li>
                                </ul> -->
                            </li>                        

                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="{{ url('/notice/41')}}">Fourth Year</a>
                               <!--  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/notice/41a')}}">4/1(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/41b')}}">4/1(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/42a')}}">4/2(a)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/42b')}}">4/2(b)</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/41')}}">4/1</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/notice/42')}}">4/2</a></li>
                                </ul> -->
                            </li>

                        </ul>              
                    </li>

                    <li>
                        <a href="{{ url('/curriculum')}}" class="blue darken-3 white-text">
                            Curriculum
                        </a> 
                    </li>

                    @if (Auth::guest())

                    @elseif( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher")
                    <li>
                        <a href="{{ url('/admin_desk') }}" class="blue darken-3 white-text">
                            Admin Desk
                        </a>
                    </li> 
                    
                    @endif

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
                            <li><a href="{{ url('/register') }}" class="blue darken-3 white-text">Register</a></li>
                            @else
                            
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
        </div>
    </div>
<div style="margin-top: 70px;">
    
</div>

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

    <script type="text/javascript">
      $(document).ready(function() {
  $('.collapse.in').prev('.panel-heading').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').removeClass('active');
    });
});
    </script>

    <script type="text/javascript">
    function convert()
    {
      var text=document.getElementById("url").value;
      var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
      var text1=text.replace(exp, "<a href='$1'>$1</a>");
      var exp2 =/(^|[^\/])(www\.[\S]+(\b|$))/gim;
      document.getElementById("converted_url").name=text1.replace(exp2, '$1<a target="_blank" href="http://$2">$2</a>');
    }
  </script>

</body>
</html>