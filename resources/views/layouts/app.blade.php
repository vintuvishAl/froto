<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Froto</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/hippo-off-canvas.css')}}" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/isotope.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{asset('css/libs/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <!-- SKIN -->
    <link rel="stylesheet" href="{{asset('css/default-black.css')}}" type="text/css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>
    <![endif]-->
    <style>
        .button{font-family: arial;}
        .otheritem{ max-width: 100%!important; background: #004097; padding: 20px; margin: 0 auto;}
        .noMargin{margin: 0!important;}
        .noborder{border: 0!important;}
        .otheritem{clear: both; overflow: hidden}
        .otheritem ul{border-top: 0px;}

        .otheritem ul li{margin: 0px 40px 0 0; overflow: inherit; float: left;}

        .otheritem ul li img {
            max-width: 100%;
            height: auto;
            margin: 0;
            padding: 0;
            display: block;
            border: 1px solid #235BA9;

        ul.fivecol li {
            width: 100%;
            float: left;

        .fivecol{overflow: hidden;}
        }
    </style>
</head>

<body id="header6">

<div id="main-wrapper">
    <!-- offcanvas-menu start -->

    <!-- offcanvas-menu end -->

    <div class="offcanvas-pusher">
        <div class="content-wrapper">


                    <!-- HEADER -->
                    <header id="header-main" class="box-header-style">
                        <div class="navbar yamm navbar-default navbar-fixed-top">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a  href="{{'/'}}" class="navbar-brand"><img src="{{asset('fonts/Logo.png')}}" width="40" alt=""/></a>
                                </div>

                                <!-- CART / SEARCH -->


                                <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
                                    <ul class="nav navbar-nav hidden-sm">
                                        <li><a href="{{ url('/') }}">How froto works</a></li>
                                        <li><a href="{{ url('/') }}">About froto</a></li>
                                        <li><a href="{{ url('/') }}">our story</a></li>
                                        <li><a href="{{ url('/') }}">Pricing</a></li>
                                        <li><a href="{{ url('/') }}">Faq</a></li>
                                        <li><a href="{{ url('/') }}">contact us</a></li>
                                        @if (Auth::guest())
                                            <li><a href="{{ url('/login') }}">Login</a></li>
                                            <li><a href="{{ url('/register') }}">Register</a></li>
                                        @else

                                        <li class="dropdown ">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                {{ Auth::user()->name }}
                                                <div class="arrow-up"><i class="fa fa-angle-down"></i></div>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                            </ul>
                                        </li>
                                            @endif
                                        <!--
                                        <li class="dropdown" style="background:#000; #000">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#fff; letter-spacing:0;">
                                                Try Page Builder
                                            </a>

                                        </li>
                                        -->
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.navbar -->
                    </header>
                </div>

                <div class="gap">
                </div>
                @yield('content')
                <!-- SLIDER -->

        <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            })
        </script>




<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.js')}}"></script>
<script src="{{asset('js/jflickrfeed.min.js')}}"></script>
<script src="{{asset('js/tweecool.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/hippo-off-canvas.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/jquery.inview.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>




</body>
</html>
