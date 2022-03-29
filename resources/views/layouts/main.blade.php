<li><a href="{{ url('/add')}}">Register</a></li>
                <li>

                    @if (Route::has('login'))

                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth

                    @endif


                </li>
                @yield('content')