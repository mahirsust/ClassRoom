<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Class Room Management</title>

    <div id="ascrail2001" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 138px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/cse2.png">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app_dashboard.name', 'Class Room Management') }}
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- admin task -->    
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Home</a></li> -->

                    <li><a href="{{ url('/home')}}">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Routine <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="#">1/1(a)</a></li>
                            <li><a tabindex="-1" href="#">1/1(b)</a></li>
                            <li><a tabindex="-1" href="#">1/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">1/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">2/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">2/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">2/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">2/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">3/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">3/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">3/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">3/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">4/1(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">4/1(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">4/2(a)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">4/2(b)</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">1/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">1/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">2/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">2/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">3/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="{{ url('/routine/32')}}">3/2</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">4/1</a></li>
                            <li><a tabindex="-1" class="dropdown-item" href="#">4/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Resource <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu" role="menu">
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
                            <li><a class="dropdown-item" href="{{ url('/resource/11')}}">1/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/12')}}">1/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/21')}}">2/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/22')}}">2/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/31')}}">3/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/41')}}">4/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/resource/42')}}">4/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Result <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu" role="menu">
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
                            <li><a class="dropdown-item" href="{{ url('/result/11')}}">1/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/12')}}">1/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/21')}}">2/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/22')}}">2/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/31')}}">3/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/41')}}">4/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/result/42')}}">4/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Notice <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">1/1(a)</a></li>
                            <li><a href="#">1/1(b)</a></li>
                            <li><a href="#">1/2(a)</a></li>
                            <li><a class="dropdown-item" href="#">1/2(b)</a></li>
                            <li><a class="dropdown-item" href="#">2/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">2/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">2/2(a)</a></li>
                            <li><a class="dropdown-item" href="#">2/2(b)</a></li>
                            <li><a class="dropdown-item" href="#">3/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">3/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">3/2(a)</a></li>
                            <li><a class="dropdown-item" href="#">3/2(b)</a></li>
                            <li><a class="dropdown-item" href="#">4/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">4/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">4/2(a)</a></li>
                            <li><a class="dropdown-item" href="#">4/2(b)</a></li>
                            <li><a class="dropdown-item" href="#">1/1</a></li>
                            <li><a class="dropdown-item" href="#">1/2</a></li>
                            <li><a class="dropdown-item" href="#">2/1</a></li>
                            <li><a class="dropdown-item" href="#">2/2</a></li>
                            <li><a class="dropdown-item" href="#">3/1</a></li>
                            <li><a class="dropdown-item" href="{{ url('/routine/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="#">4/1</a></li>
                            <li><a class="dropdown-item" href="#">4/2</a></li>
                            </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Info About IICT <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Ground Floor</a></li>
                                <li><a class="dropdown-item" href="#">1st Floor</a></li>
                                <li><a class="dropdown-item" href="#">2nd Floor</a></li>
                                <li><a class="dropdown-item" href="#">3rd Floor</a></li>
                            </ul>
                        
                    </li>
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
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
