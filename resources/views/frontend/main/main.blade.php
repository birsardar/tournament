    <!doctype html>
    <html>
    <head>
        <title>Digital Database System</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="codetomake.com">
        <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        
    </head>
    <body>
        <header class="header">
          @include('frontend.main.header')
      </header>
      <div class="main">
        <section class="col-main">
            @yield('content')

        </section>
        <aside class="col-right">
            <div class="box">
                <h2>Lorem ipsum dolor</h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique.
            </div>

            <div class="box">
                <h2>Lorem ipsum dolor</h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis.

                <hr>

                <h2>Social</h2>
                <div class="font-awesome">
                    <a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square  fa-2x" aria-hidden="true"></i></a>
                </div>
                <hr>
                <div class="font-awesome">
                    <a href="#"><i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-discover fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
        </aside>
    </div>
    @include('frontend.main.footer')
</body>

</html>