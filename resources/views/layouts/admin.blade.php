<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Maxima | Responsive Multipurpose Bootstrap Theme</title>

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
    <link rel="stylesheet" href="{{asset('magnific-popup.css')}}">
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

<body>
<div id="top"></div>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<section id="header">
    <div class="container"><div class="row">

            <a class="navbar-brand" href="./index.html"><img src="{{asset('fonts/Logo copy.png')}}" alt=""></a>

            <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
                <ul id="mainmenu" class="nav menu sf-menu responsive-menu superfish">
                    <li class="">
                        <a href="{{'/'}}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="">Blog</a>
                        <ul class="nav dropdown-menu">
                            <li class="">
                                <a href="">Blog</a>
                            </li>
                            <li class="">
                                <a href="">Blog Post</a>
                            </li>
                        </ul>
                    </li>


                    </ul>

                $table->increments('id');
                $table->integer('user_id')->unsigned()->index();
                $table->string('vechiles');
                $table->integer('vechiletype')->default(0);
                $table->text('pickup');
                $table->text('drop');
                $table->string('name');
                $table->integer('contact')->unsigned();
                $table->string('date');
                $table->string('time');
                $table->integer('frotoguy')->default(0);
                $table->integer('frotoguynumber')->default(0);
                $table->timestamps();


                    @yield('menubar')

                </ul>
            </div>

        </div></div>
</section>
@yield('content')










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




@yield('scripts')

@yield('footer')

</body>

</html>
