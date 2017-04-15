<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app_dashboard.name', 'Class Room Management') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/cse2.png">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Routine
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul>
                            <li><a class="dropdown-item" href="#">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">1/2(a)</a></li>
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
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resource
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul>
                            <li><a class="dropdown-item" href="#">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">1/2(a)</a></li>
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
                            <li><a class="dropdown-item" href="{{ url('/resource/32')}}">3/2</a></li>
                            <li><a class="dropdown-item" href="#">4/1</a></li>
                            <li><a class="dropdown-item" href="#">4/2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Result
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul>
                            <li><a class="dropdown-item" href="#">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">1/2(a)</a></li>
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
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notice
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul>
                            <li><a class="dropdown-item" href="#">1/1(a)</a></li>
                            <li><a class="dropdown-item" href="#">1/1(b)</a></li>
                            <li><a class="dropdown-item" href="#">1/2(a)</a></li>
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
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Info About IICT
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul>
                                <li><a class="dropdown-item" href="#">Ground Floor</a></li>
                                <li><a class="dropdown-item" href="#">1st Floor</a></li>
                                <li><a class="dropdown-item" href="#">2nd Floor</a></li>
                                <li><a class="dropdown-item" href="#">3rd Floor</a></li>
                            </ul>
                        </div>
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
