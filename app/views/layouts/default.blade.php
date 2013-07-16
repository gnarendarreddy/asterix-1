<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            @section('title')
            Asterix 
            @show
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/styles/css/main.css')}} ">
        <link rel="stylesheet" href="{{ asset('assets/styles/css/slidder.css')}} ">

        <!-- JS -->
        <script src="{{ asset('assets/scripts/js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <script src="{{asset('assets/scripts/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('assets/scripts/js/vendor/md5.js')}}"></script>
         <script src="{{asset('assets/scripts/js/vendor/main.js')}}"></script>
        <!-- Images -->
        <link rel="logo" sizes="144x58" href="{{ asset('assets/images/logo.gif.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/apple-touch-icon-57-precomposed.png') }}">

        <!-- ICO -->
        <link rel="shortcut icon" href="favicon.ico">
<style type="text/css">


html { height: 100% }
body {
       background-color: #dddddd;
       background-image: -webkit-gradient(radial, 50% 0%,100,50% 150%,100, from(#333333), to(#dddddd));
       background-image: -webkit-radial-gradient(50% 100%, #dddddd, #333333);
       background-image: -moz-radial-gradient(50% 100%, #dddddd, #333333);
       background-image: -o-radial-gradient(50% 100%, #dddddd, #333333);
       background-image: -ms-radial-gradient(50% 100%, #dddddd, #333333);
       background-image: radial-gradient(50% 100%, #dddddd, #333333);
       color:#fff;
       overflow: scroll;
       height: 100%;
       -webkit-text-size-adjust: 100%; /* Stops Mobile Safari from auto-adjusting font-sizes */
}


</style>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Navbar -->
        <div class="navbar navbar-fixed-top" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">

                            <li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ URL::to('') }}"><i></i><img src="/assets/images/logo.gif.png"/> </a></li>

                            

                        </ul>

                        <ul class="nav pull-right">
                            @if (Auth::check())
                                <li class="navbar-text">Logged in as {{ Auth::user()->fullName() }}</li>
                                <li class="divider-vertical"></li>
                                <li {{ (Request::is('account/home1') ? 'class="active"' : '') }}><a href="{{ URL::to('account/home1') }}"><i class="icon-home"></i> Home</a></li>
                                <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">Update</a></li>
                                <li><a href="{{ URL::to('account/logout') }}">Logout</a></li>
                            @else
                                <li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ URL::to('') }}"><i class="icon-home"></i> Home</a></li>
                                <li {{ (Request::is('account/about') ? 'class="active"' : '') }}><a href="{{ URL::to('account/about') }}">About</a></li>
                                <li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
                                
                                
                                <li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
                                <li >
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-product"></i>Products <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li {{ (Request::is('account/pmp') ? 'class="active"' : '') }}><a href="{{ URL::to('account/pmp') }}">PMP</a></li>
                                        <li {{ (Request::is('account/agile') ? 'class="active"' : '') }}><a href="{{ URL::to('account/agile') }}">Agile</a></li>
                                     <li {{ (Request::is('account/game') ? 'class="active"' : '') }}><a href="{{ URL::to('account/game') }}">Game</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- ./ nav-collapse -->
                </div>
            </div>
        </div>
        <!-- ./ navbar -->
        

        <!-- Add your site or application content here -->
        <!-- Container -->
        <div class="container">

            <!-- Notifications -->
            @include('partials.notifications')
            <!-- ./ notifications -->

            <!-- Content -->
            @yield('content')
            <!-- ./ content -->
           
            <div class="footer">
                   <p>@copy rights reserved</p>
        </div>

        </div>
        <!-- ./ container -->
            

        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/scripts/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="{{ asset('assets/scripts/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/scripts/js/main.js') }}"></script>
        <script src="{{ asset('assets/scripts/js/vendor/bootstrap.min.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            // g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            // s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
    </body>
</html>
