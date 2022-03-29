 <nav>
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="articles.html">Articles</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown"><a href="#">Tournament</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Solo</a></li>
                        <li><a href="#">Duo</a></li>
                        <li><a href="#">Squard</a></li>
                    </ul>
                </li>
                <li><a href=>Register</a></li>
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
            </ul>
        </nav>