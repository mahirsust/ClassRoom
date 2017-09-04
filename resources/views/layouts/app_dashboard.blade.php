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
  <link rel="shortcut icon" href="{{url('/')}}/images/cse6.png">


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
    <nav class="navbar navbar-dark blue darken-3 white-text">
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
                    @if (Auth::guest())

                    @elseif(Auth::user()->name==="Super Admin")
                    <li><a href="/admin_desk" class="blue darken-3 white-text">Admin Desk</a></li> 
                    @else
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
                            <!-- <li><a href="{{ url('/register') }}" class="blue darken-3 white-text">Register</a></li> -->
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


           <!-- Small Chat Start -->
 
  <script src="https://embed.small.chat/T069Q9AURG5V5M8ZGF.js" async></script>
<div id="Smallchat"><iframe data-reactroot="" style="z-index: 999999999; position: fixed; right: 0px; bottom: 0px; border: 0px; background: none; transition: width 200ms cubic-bezier(0.25, 0.25, 0.5, 1), height 200ms cubic-bezier(0.25, 0.25, 0.5, 1); width: 100px; height: 94px;">
  <html>
<head>
<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-97061864-1', 'auto');
ga('send', 'pageview', {
dimension1: 'T069Q9AUR'
});
</script>
<link type="text/css" rel="stylesheet" href="https://static.small.chat/messenger.css">
</head>
<body>
    <div>
        <div data-reactroot="" class="frame-content">
            <div id="Smallchat">
                <div class="Layout Launcher-icon" style="background-color: rgb(0, 209, 178); color: rgb(255, 255, 255); opacity: 0; border-radius: 50%;">
                    <div class="Launcher Launcher-icon">
                        <div class="Icon" style="width: 28px; height: 28px;">
                            <svg width="67px" height="61px" viewBox="1771 1024 67 61" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 28px; height: 28px;">
                                <path d="M1771.00079,1051.80396 C1771.00079,1060.37208 1775.69246,1068.30322 1783.87433,1073.56217 C1785.02065,1074.30013 1786.54515,1073.98164 1787.28574,1072.85528 C1788.02632,1071.7328 1787.70724,1070.22969 1786.56879,1069.49561 C1779.80112,1065.14552 1775.92488,1058.69807 1775.92488,1051.80396 C1775.92488,1039.27415 1788.72357,1029.07863 1804.45308,1029.07863 C1820.18259,1029.07863 1832.98128,1039.27415 1832.98128,1051.80396 C1832.98128,1064.33377 1820.18259,1074.52929 1804.45308,1074.52929 C1801.75074,1074.52929 1799.07204,1074.22633 1796.48787,1073.63208 L1795.43215,1073.38739 L1785.0049,1080.39802 C1783.8822,1081.1554 1783.59464,1082.66628 1784.35886,1083.77322 C1784.83945,1084.46069 1785.61155,1084.82967 1786.3994,1084.82967 C1786.87605,1084.82967 1787.35664,1084.69373 1787.78602,1084.4102 L1796.43666,1078.58807 C1799.05628,1079.12018 1801.7468,1079.38429 1804.45308,1079.38429 C1822.90069,1079.38429 1837.90537,1067.01373 1837.90537,1051.80396 C1837.90537,1036.59807 1822.90069,1024.22362 1804.45308,1024.22362 C1786.00547,1024.22362 1771.00079,1036.59807 1771.00079,1051.80396 Z" id="chaticon" stroke="none" fill="#FFFFFF" fill-rule="evenodd">
                    
                                </path>
                            </svg>
                        </div><!-- react-text: 5640 --><!-- /react-text -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</iframe></div>
         <!-- Small Chat End -->


</body>
</html>
