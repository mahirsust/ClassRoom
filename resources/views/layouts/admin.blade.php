<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <!-- admin task -->    
    <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Home</a></li> -->

        <li><a href="{{ url('/home')}}">Dashboard</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        Routine <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Notice <span class="caret"></span>
                    </a>
            <ul class="dropdown-menu" role="menu">
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
        <li class="dropdown">
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
            
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
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
    </ul>
</div>