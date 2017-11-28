<!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from html.imithemes.com/autostars/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2017 05:58:02 GMT -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Class Room Management</title>
<meta name="description" content="A service for CSE-SUST">
<meta name="keywords" content="crm">
<meta name="author" content="MeemMahir">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link rel="shortcut icon" href="{{url('/')}}/images/cse6.png">
<link href="navbar/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="navbar/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="navbar/css/style.css" rel="stylesheet" type="text/css">
<link href="navbar/vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="navbar/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="navbar/vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">

<!-- Color Style -->
<link class="alt" href="navbar/colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="navbar/js/modernizr.js"></script><!-- Modernizr -->
</head>

<body class="home">
<div class="body">
    <!-- Start Site Header -->
    <div class="site-header-wrapper">
        <div class="navbar">
            <div class="navbar-header" style="margin-left: 50px;">

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color: red;" href="{{ url('/') }}">
                        {{ config('app_dashboard.name', 'Class Room Management') }}
                    </a>

            </div>
            <div class="container">
                <!-- <div class="sf-menu">
                    <ul class="nav navbar-nav navbar-right">
                        
                    </ul>
                </div> -->
                <a class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                    <!-- Curriculum -->
                       <!--  <li><a href="/">Home</a></li> -->
                        <!-- Routine -->
                        <li style="margin-left: 40px;"><a>Routine</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                       <!--  <li><a href="{{ url('/routine/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/11')}}">1/1</a></li> -->
                                        <li><a href="{{ url('/routine/12a')}}">Section A</a></li>
                                        <li><a href="{{ url('/routine/12b')}}">Section B</a></li>
                                       <!--  <li><a href="{{ url('/routine/12')}}">1/2</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{ url('/routine/22a')}}">Second Year</a>
                                   <!--  <ul class="dropdown" >
                                         <li><a href="{{ url('/routine/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/routine/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/22')}}">2/2</a></li> 
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/routine/32a')}}">Third Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/routine/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/routine/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/32')}}">3/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/routine/41a')}}">Fourth Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/routine/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/routine/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/42')}}">4/2</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                        <!-- Resource -->
                        <li><a>Resource</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                       <!--  <li><a href="{{ url('/resource/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/11')}}">1/1</a></li> -->
                                        <li><a href="{{ url('/resource/12a')}}">Section A</a></li>
                                        <li><a href="{{ url('/resource/12b')}}">Section B</a></li>
                                      <!--   <li><a href="{{ url('/resource/12')}}">1/2</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{ url('/resource/22')}}">Second Year</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="{{ url('/resource/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/resource/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/22')}}">2/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/resource/32')}}">Third Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/resource/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/resource/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/32')}}">3/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/resource/41')}}">Fourth Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/resource/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/resource/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/42')}}">4/2</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                        <!-- Result -->
                        <li><a>Result</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                       <!--  <li><a href="{{ url('/result/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/result/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/result/11')}}">1/1</a></li> -->
                                        <li><a href="{{ url('/result/12a')}}">Section A</a></li>
                                        <li><a href="{{ url('/result/12b')}}">Section B</a></li>
                                       <!--  <li><a href="{{ url('/result/12')}}">1/2</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{ url('/result/22')}}">Second Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/result/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/result/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/result/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/result/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/result/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/result/22')}}">2/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/result/32')}}">Third Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/result/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/result/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/result/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/result/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/result/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/result/32')}}">3/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/result/41')}}">Fourth Year</a>
                                   <!--  <ul class="dropdown">
                                        <li><a href="{{ url('/result/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/result/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/result/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/result/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/result/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/result/42')}}">4/2</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                        <!-- Notice -->
                        <li><a>Notice</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                       <!--  <li><a href="{{ url('/notice/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/11')}}">1/1</a></li> -->
                                        <li><a href="{{ url('/notice/12a')}}">Section A</a></li>
                                        <li><a href="{{ url('/notice/12b')}}">Section B</a></li>
                                       <!--  <li><a href="{{ url('/notice/12')}}">1/2</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{ url('/notice/22')}}">Second Year</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="{{ url('/notice/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/notice/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/22')}}">2/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/notice/32')}}">Third Year</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="{{ url('/notice/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/notice/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/32')}}">3/2</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="{{ url('/notice/41')}}">Fourth Year</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="{{ url('/notice/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/notice/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/42')}}">4/2</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                        <!-- Curriculum -->
                        <li><a href="{{url('/curriculum') }}">Curriculum</a></li>

                        <!-- Admin Desk -->
                        @if (Auth::guest())

                        @elseif( Auth::user()-> type == "super admin" or Auth::user()-> type == "teacher")
                          <li><a href="{{url('/admin_desk') }}">Admin Desk</a></li> 
                        
                        @endif 

                        
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li style="margin-left: 150px;"><a href="{{ url('/login') }}">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                Login</a></li>
                            <li><a href="{{ url('/register') }}">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                                Register</a></li>
                        @else
                            <li class="dropdown" style="margin-left: 70px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user mr-1"></i> 
                                    {{ Auth::user()->name }} <!-- <span class="caret"></span> -->
                                </a>
                                
                                <ul class="dropdown-menu" style="" role="menu">
                                    <li>
                                    <a href="">
                                        <i class="fa fa-user mr-1" aria-hidden="true"></i>
                                        Profile
                                    </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
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
                </nav> 
            </div>
        </div>
    </div>
    <div class="hero-area">
        <!-- Start Hero Slider -->
        <div class="hero-slider heroflex flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-speed="7000" data-pause="no">
            <ul class="slides">
                <li class="parallax" style="background-image:url(images/3.jpg); size: relative"></li>
                <li class="parallax" style="background-image:url(images/1.jpg); size: relative"></li>
                <li class="parallax" style="background-image:url(images/2.jpg); size: relative"></li>
            </ul>
        </div>
        <!-- End Hero Slider -->
    </div>

    <!-- Start site footer -->
    <footer class="site-footer">
        <!-- Text Carousel
    ================================================== -->
<!-- <section id="slider" class="parallax section" style="background-image: url(http://themepush.com/demo/runcharity/assets/img/4.jpg);">
<div class="wrapsection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <blockquote>
                                <p class="lead">
                                    You have not lived today until you have done something for someone who can never repay you.
                                </p>
                                <small>John Bunyan, Marathon</small>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <p class="lead">
                                    The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer.
                                </p>
                                <small>Mahatma Gandhi</small>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <p class="lead">
                                    There is no exercise better for the heart than reaching down and lifting people up.
                                </p>
                                <small>John Holmes, Organizer</small>
                            </blockquote>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#Carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#Carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->
        <!-- <div class="site-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                        <h4 class="widgettitle">Sign up for our newsletter</h4>
                        <form>
                            <input type="submit" class="btn btn-primary btn-lg" value="Sign up now">
                        </form>
                    </div>
                    <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                        <h4 class="widgettitle">Blogroll</h4>
                        <ul>
                            <li><a href="blog.html">Car News</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                        <h4 class="widgettitle">Help &amp; Support</h4>
                        <ul>
                            <li><a href="results-list.html">Buying a car</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 footer_widget widget text_widget">
                        <h4 class="widgettitle">About AutoStars</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 copyrights-left">
                        <p>&copy; 2017 MeemMahir. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-6 copyrights-right">
                        <ul class="social-icons social-icons-colored pull-right">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li class="vimeo"><a href="#"><i class="fa fa-google"></i></a></li>
                            <li class="digg"><a href="#"><i class="fa fa-digg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
    <a id="back-to-top"><i class="fa fa-angle-up" aria-hidden="true" style="font-size: 30px;margin-top: 9px;"></i></a>  
</div>

<script src="navbar/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="navbar/vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="navbar/js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="navbar/js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="navbar/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="navbar/vendor/password-checker.js"></script> <!-- Password Checker -->
<script src="navbar/js/bootstrap.js"></script> <!-- UI -->
<script src="navbar/js/init.js"></script> <!-- All Scripts -->
<script src="navbar/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
</body>
</html>