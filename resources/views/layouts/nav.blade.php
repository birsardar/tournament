 <nav>
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="articles.html">Articles</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href=""> a</li>
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
            
            @endif</li>
              
            </ul>
        </nav>