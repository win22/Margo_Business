<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Margo Business</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="{{ asset('site/images/margo2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/royalslider.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}">
    <script src="{{ asset('site/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body class="tg-home tg-hometwo" >
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header id="tg-header" class="tg-header tg-fixedheader tg-headervtwo reveal">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-headercontent">
                    <strong class="tg-logo">
                        <a href="/">
                            <img src="{{ asset('site/images/margo1.png') }}" alt="company logo here">
                            <img src="{{ asset('site/images/margo1.png') }}" alt="company logo here">
                        </a>
                    </strong>
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul style="font-family: 'Manjari Regular' !important;">
                                <li class="menu-item-has-children">
                                    <a href="/" class="{{ request()->is('/')? 'active' : ''  }}">Acceuil</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('blg') }}">Blog</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('frm') }}">Formation</a></li>
                                        <li><a href="{{ route('coach') }}">Coaching</a></li>
                                        <li><a href="{{ route('consul') }}">Consulting</a></li>
                                        <li><a href="{{ route('even') }}">Evenementiel</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('ab') }}">A propos</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('cont') }}">Contact</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('log') }}">Se connecter</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="tg-innerbanner" style="height: 780px" class="tg-innerbanner">
    <figure  style="height: 780px; background-image: url({{ asset('site/images/allhome/DSC_2380.jpeg') }}) !important; background-size: cover; background-repeat: no-repeat " data-vide-options="position: 0% 50%">
        <figcaption style="height: 780px;">
            <div class="container">
                <div class="row">
                    <div class="tg-maintenenacecontent pull-right">
                        <h3 style="text-shadow: 2px 0px 3px rgba(8,79,104,0.67);color: white; font-family: 'lora'">Toutes nos excuses,
                            pour des raisons techniques, cette page est actuellement en maintenance</h3>
                        <div class="tg-skills">
                            <div style="padding-top: 20px !important;" class="tg-skill">
                                <span>Niveau actuelle de conception</span>
                                <span>97%</span>
                                <div class="tg-skillholder" data-percent="97%">
                                    <div class="tg-skillbar"></div>
                                </div>
                            </div>
                        </div>
                        <a class="tg-btn" href="/"><span>Retour</span></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>




<script src="{{ asset('site/js/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('site/js/vendor/bootstrap.min.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=fr"></script>
<script src="{{ asset('site/js/jquery.singlePageNav.min.js') }}"></script>
<script src="{{ asset('site/js/jquery-scrolltofixed.js') }}"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.vide.min.js') }}"></script>
<script src="{{ asset('site/js/royalslider.min.js') }}"></script>
<script src="{{ asset('site/js/scrollbar.min.js') }}"></script>
<script src="{{ asset('site/js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('site/js/prettyPhoto.js') }}"></script>
<script src="{{ asset('site/js/sticky-kit.js') }}"></script>
<script src="{{ asset('site/js/countdown.js') }}"></script>
<script src="{{ asset('site/js/parallax.js') }}"></script>
<script src="{{ asset('site/js/collapse.js') }}"></script>
<script src="{{ asset('site/js/countTo.js') }}"></script>
<script src="{{ asset('site/js/appear.js') }}"></script>
<script src="{{ asset('site/js/gmap3.js') }}"></script>
<script src="{{ asset('site/js/main.js') }}"></script>
<script src="{{ asset('site/js/anim/app.js') }}"></script>

<script>
    $(document).ready(function () {
        $('.carde').hover(
            function () {
                $(this).animate({
                    marginTop: "-1%",
                },100);
            },
            function () {
                $(this).animate({
                    marginTop: "0%",
                },100);
            }
        )
    });
</script>

</body>
</html>


