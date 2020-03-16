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
<div id="tg-innerbanner" style="height: 660px" class="tg-innerbanner">
    <figure  style="height: 660px; background-image: url({{ asset('site/images/allhome/DSC_2380.jpeg') }}) !important; background-size: cover; background-repeat: no-repeat " data-vide-options="position: 0% 50%">
        <figcaption style="height: 660px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6 pull-right">
                        <h1 style="text-shadow: 2px 0px 3px rgba(8,79,104,0.67); font-family: 'lora'">Hello,My name is</h1>
                        <h1> <span style="color: yellow; font-family: 'lora'">Ibrahimma DIALLO</span></h1>

                        <div class="tg-btnbox">
                            <a class="tg-btnplay" href="javascript:void(0);"><i style="color: yellow" class="icon-play3"></i></a>
                            <span style="font-family: 'Manjari Bold'; color: white">Je vous invites à suivre ma vidéo</span>
                        </div>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<section style="padding-bottom: 0px  !important;background-color: #ffb400 !important; background-image: url( {{ asset('site/images/allhome/electrician_19.png') }} ); " class="tg-sectionspace tg-paddingbottomzero tg-haslayout reveal">
    <div class="container">
        <div style="padding-bottom: 0px !important;" class="row">
            <div class="tg-community">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 ">
                    <div class="tg-textshortcode">
                        <div class="tg-sectionhead tg-sectionheadvtwo">
                            <div class="tg-sectiontitle reveal-3">
                                <h2  style="color: black; font-family: 'lora'">
                                    Ce que nous sommes
                                </h2>
                            </div>
                        </div>
                        <div class="tg-description reveal-4">
                            <p style="color: black">
                                Margo Business vous propose une opportunité unique de créer un lien au tour de vous. Ceci sera un pilier pour l’image, l’accroissement la notoriété et la promotion de vos produits et services Une méthode efficace pour prendre votre entreprise en main
                                et éclater vos blocages intérieurs, une véritables clés et stratégies pour améliorer vos finances et vos relations.
                                Il s’agit d’un plan concret pour créer la réussite que vous désirez. De nouvelles décisions pour passer un cap supérieur dans votre vie. Un groupe de nouveaux amis qui vous supporteront dans vos projets
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="tg-community">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8  pull-right">
                    <div class="tg-textshortcode">
                        <div class="tg-sectionhead tg-sectionheadvtwo">
                            <div class="tg-sectiontitle reveal-3">
                                <h2  style="color: black; font-family: 'lora'">
                                    Pourquoi nous faire confiance
                                </h2>
                            </div>
                        </div>
                        <div class="tg-description reveal-4">
                            <p style="color: black">
                                Une journée de séminaire pour vous intégrer les secrets de ceux qui réussissent et enfin
                                lancer votre propre business en partant de zéro !
                                <span>Ce séminaire vous permettra de :</span>
                            </p>
                            <div class="row">
                                <div class="col-md-6" style="font-size: 15px; color: black">
                                    <ul>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Identifier ce que vous voulez vraiment</li>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Clarifiez vos objectifs</li>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Définir vos priorités sur un an et plus</li>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Trouver votre motivation et la rendre durable</li>
                                    </ul>
                                </div>
                                <div class="col-md-6" style="font-size: 15px; color: black">
                                    <ul>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Identifier ce que vous voulez vraiment</li>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i>
                                            Apprendre la methode P.C.S
                                        </li>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Intensifier cette energie et creez votre feu interieur</li>
                                        <li><i style="color: #084f68!important" class="fa fa-check-circle"></i> Apprendre comment la retrouver à chaque instant quand
                                            vous la perdez</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="tg-aboutus tg-aboutusvtwo">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><span>Margo Business</span>We're a creative agency. Ask us about branding, design and more about ourselves!</h2>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <ul class="tg-list tg-liststyledash">
                        <li>consectetuer adipiscing elit.</li>
                        <li>sit amet, consectetur adipisicing</li>
                        <li>incididunt ut labore</li>
                        <li>Ut enim ad minim veniam,</li>
                        <li>consectetuer adipiscing elit.</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <ul class="tg-list tg-liststyledash">
                        <li>consectetuer adipiscing elit.</li>
                        <li>sit amet, consectetur adipisicing</li>
                        <li>incididunt ut labore</li>
                        <li>Ut enim ad minim veniam,</li>
                        <li>consectetuer adipiscing elit.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@include('site.footer')

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



