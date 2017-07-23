<!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from html.imithemes.com/autostars/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2017 05:58:02 GMT -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Class Room Management</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
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
            <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color: red;" href="{{ url('/') }}">
                        {{ config('app_dashboard.name', 'Class Room Management') }}
                    </a>

                </div>
            <div class="container">
                <div class="sf-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">
                                Login</a></li>
                            <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user mr-1"></i> 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                <ul class="dropdown-menu" style="" role="menu">
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
                </div>
                <a class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu " role="navigation">
                    <ul class="sf-menu" style="color: red;">
                    <!-- Curriculum -->
                        <li><a href="/home">Home</a></li>
                        <!-- Routine -->
                        <li><a>Routine</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/routine/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/11')}}">1/1</a></li>
                                        <li><a href="{{ url('/routine/12a')}}">1/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/12b')}}">1/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/12')}}">1/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Second Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/routine/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/routine/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/22')}}">2/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Third Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/routine/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/routine/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/32')}}">3/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Fourth Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/routine/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/routine/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/routine/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/routine/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/routine/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/routine/42')}}">4/2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Resource -->
                        <li><a>Resource</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/resource/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/11')}}">1/1</a></li>
                                        <li><a href="{{ url('/resource/12a')}}">1/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/12b')}}">1/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/12')}}">1/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Second Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/resource/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/resource/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/22')}}">2/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Third Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/resource/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/resource/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/32')}}">3/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Fourth Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/resource/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/resource/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/resource/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/resource/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/resource/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/resource/42')}}">4/2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Result -->
                        <li><a>Result</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/result/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/result/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/result/11')}}">1/1</a></li>
                                        <li><a href="{{ url('/result/12a')}}">1/2 (a)</a></li>
                                        <li><a href="{{ url('/result/12b')}}">1/2 (b)</a></li>
                                        <li><a href="{{ url('/result/12')}}">1/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Second Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/result/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/result/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/result/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/result/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/result/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/result/22')}}">2/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Third Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/result/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/result/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/result/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/result/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/result/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/result/32')}}">3/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Fourth Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/result/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/result/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/result/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/result/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/result/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/result/42')}}">4/2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Notice -->
                        <li><a>Notice</a>
                            <ul class="dropdown">
                                <li><a>First Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/notice/11a')}}">1/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/11b')}}">1/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/11')}}">1/1</a></li>
                                        <li><a href="{{ url('/notice/12a')}}">1/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/12b')}}">1/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/12')}}">1/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Second Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/notice/21a')}}">2/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/21b')}}">2/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/21')}}">2/1</a></li>
                                        <li><a href="{{ url('/notice/22a')}}">2/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/22b')}}">2/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/22')}}">2/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Third Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/notice/31a')}}">3/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/31b')}}">3/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/31')}}">3/1</a></li>
                                        <li><a href="{{ url('/notice/32a')}}">3/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/32b')}}">3/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/32')}}">3/2</a></li>
                                    </ul>
                                </li>
                                <li><a>Fourth Year</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/notice/41a')}}">4/1 (a)</a></li>
                                        <li><a href="{{ url('/notice/41b')}}">4/1 (b)</a></li>
                                        <li><a href="{{ url('/notice/41')}}">4/1</a></li>
                                        <li><a href="{{ url('/notice/42a')}}">4/2 (a)</a></li>
                                        <li><a href="{{ url('/notice/42b')}}">4/2 (b)</a></li>
                                        <li><a href="{{ url('/notice/42')}}">4/2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Curriculum -->
                        <li><a href="/curriculum">Curriculum</a></li>

                        <!-- Admin Desk -->
                        @if (Auth::guest())

                        @elseif(Auth::user()->name==="Super Admin")
                          <li><a href="/admin_desk">Admin Desk</a></li> 
                        @else
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
                <li class="parallax" style="background-image:url(images/IICT/IICT1.jpg); size: relative"></li>
                <li class="parallax" style="background-image:url(images/IICT/IICT2.jpg);"></li>
            </ul>
        </div>
        <!-- End Hero Slider -->
    </div>
    <!-- Start site footer -->
    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                        <h4 class="widgettitle">Sign up for our newsletter</h4>
                        <form>
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="email" class="form-control" placeholder="Email">
                            <input type="submit" class="btn btn-primary btn-lg" value="Sign up now">
                        </form>
                    </div>
                    <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                        <h4 class="widgettitle">Blogroll</h4>
                        <ul>
                            <li><a href="blog.html">Car News</a></li>
                            <li><a href="blog-masonry.html">Car Reviews</a></li>
                            <li><a href="about.html">Car Insurance</a></li>
                            <li><a href="about-html.html">Bodyshop</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                        <h4 class="widgettitle">Help &amp; Support</h4>
                        <ul>
                            <li><a href="results-list.html">Buying a car</a></li>
                            <li><a href="joinus.html">Selling a car</a></li>
                            <li><a href="about.html">Online safety</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 footer_widget widget text_widget">
                        <h4 class="widgettitle">About AutoStars</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
        </div>
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
                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="digg"><a href="#"><i class="fa fa-digg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login to your account</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
        </div>
    </div>
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