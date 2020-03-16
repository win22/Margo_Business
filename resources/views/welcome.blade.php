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
<!--************************************
        Loader Start
*************************************-->
<div id="loader-wrapper">
    <div id="loader"></div>

</div>
<!--************************************
        Loader End
*************************************-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
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
    <!--************************************
            Header End
    *************************************-->
    <div class="tg-pushpage">
        <!--************************************
                Home Slider Start
        *************************************-->
        <div id="tg-homeslidervfour" class="tg-homeslider owl-carousel tg-homeslidervfour reveal">
            <figure class="item" data-vide-bg="{{ asset('site/images/slider/sl2.jpeg') }}" data-vide-options="position: 0% 50%">
                <figcaption>
                    <div class="container">
                        <div class="row reveal">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-slidercontent">
                                    <h1
                                    style=" text-shadow: 2px 0px 3px rgba(8,79,104,0.67)"
                                    ><span>Margo Business</span></h1>
                                    <div class="tg-description">
                                        <h2 style=" font-family: 'Lora'; color: white ;text-shadow: 2px 0px 3px rgba(8,79,104,0.67)">creez une vie selon vos propres termes, car vous étes les leaders de demain!</h2>
                                    </div>
                                    <div class="tg-btns">
                                        <a class="tg-btn" href=""><span>Démarrer</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="{{ asset('site/images/slider/sl2.jpg') }}" data-vide-options="position: 0% 50%">
                <figcaption>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-slidercontent">
                                    <h1>We’re Focused<span>on Digital Products</span></h1>
                                    <div class="tg-description">
                                        <p>A Totally New Way to Grow your Business We Bring you an Awesome of Design Creative Skills,</p>
                                    </div>
                                    <div class="tg-btns">
                                        <a class="tg-btn" href="javascript:void(0);(0);"><span>buy vation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="{{ asset('site/images/slider/sl2.jpg') }}" data-vide-options="position: 0% 50%">
                <figcaption>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-slidercontent">
                                    <h1>We’re Focused<span>on Digital Products</span></h1>
                                    <div class="tg-description">
                                        <p>A Totally New Way to Grow your Business We Bring you an Awesome of Design Creative Skills,</p>
                                    </div>
                                    <div class="tg-btns">
                                        <a class="tg-btn" href="javascript:void(0);(0);"><span>buy vation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
                    Community Start
            *************************************-->
            <section class="tg-sectionspace tg-bgdark tg-paddingbottomzero tg-haslayout reveal">
                <div class="container">
                    <div class="row">
                        <div class="tg-community">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 ">
                                <div class="tg-textshortcode">
                                    <div class="tg-sectionhead tg-sectionheadvtwo">
                                        <div class="tg-sectiontitle reveal-3">
                                            <h2 style="color: yellow; font-family: 'lora'">I Start Up My Dream</h2>
                                        </div>
                                    </div>
                                    <div class="tg-description reveal-4">
                                   <p>
                                       Crée ta vie selon tes propres termes. Tu veux atteindre tes objectifs, accroître tes
                                       finances, créer un couple heureux, maximiser tes résultats? Tu souhaites créer ou faire
                                       passer ton business au niveau supérieur et te sentir libre?  Tu veux devenir inarretable
                                       et avoir la vie qui t’inspire ?
                                   </p>
                                        <p>
                                            Vous avez une idée de projet? des affaires à développer? Ou voulez tout simplement vous lancez dans
                                            l’entrepreneuriat? Nous avons une solution pour vous ! Avec notre équipe d’expert en Affaire , MARGO BUSINESS vous accompagne, de l’idée jusqu’à la réalisation de votre projet.
                                            Nous réalisons pour vous une étude de marché et un Business Plan bancable afin de vous permettre de mener à bien votre projet.<br/>

                                            <span style="color: yellow">Viens apprendre comment faire sur MargoBusiness</span>
                                        </p>
                                    </div>
                                    <a class="tg-btn tg-btnwhite reveal-7" href="javascript:void(0);(0);"><span>Je m'inscris</span></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
                                <div class="tg-imgshortcode tg-imgshadow">
                                    <figure><img class="reveal-3" src="{{ asset('site/images/allhome/blog1.jpg') }}" style="width: 480px; height: 500px" alt="image description"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <section class="tg-haslayout">
        <div class="container-fluid">
            <div class="row">
                <div class="tg-themefeatures tg-themefeaturesvfour">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="tg-box tg-boxone">
                                <div class="tg-themefeature">
                                    <span class="tg-themefeatureicon"><i class="icon-layers2"></i></span>
                                    <h3>Formation</h3>
                                    <div class="tg-description">
                                    <p style="text-align: justify">
                                        Devenez la meilleure version de vous-même avec nos programmes de formation. Nos formations ont été créées pour vous permettre d’élever votre vie
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="tg-box tg-boxtwo">
                                <div class="tg-themefeature">
                                    <span class="tg-themefeatureicon"><i class="icon-lightbulb"></i></span>
                                    <h3>Consulting</h3>
                                    <div class="tg-description">
                                        <p style="text-align: justify">
                                            Chez Margo Business, nous offrons une gamme complète de services afin de vous permettre d’avoir une vision claire de votre stratégie et de vos procédures.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="tg-box tg-boxthree">
                                <div class="tg-themefeature">
                                    <span class="tg-themefeatureicon"><i class="icon-target-arrow"></i></span>
                                    <h3>Coaching</h3>
                                    <div class="tg-description">
                                        <p style="text-align: justify">
                                            Un Coach pour vous orienter vers la réussite ! Apprenez comment définir vos priorités, créer un plan d’action et augmenter vos résultats. Une opportunité
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Services End
    *************************************-->
    <!--************************************
            Services Start
    *************************************-->
    <section class="tg-sectionspace tg-haslayout tg-whitecontent">
        <div class="container">
            <div class="row">
                <div class="tg-themefeatures tg-themefeaturesvthree">
                    <div class="tg-themefeature">
                        <span class="tg-themefeatureicon"><i class="icon-lightbulb"></i></span>
                        <h3>Evenementiel</h3>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos consequat.</p>
                        </div>
                    </div>
                    <div class="tg-themefeature">
                        <span class="tg-themefeatureicon"><i class="icon-leaf"></i></span>
                        <h3>Séminaire</h3>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            </section>
            <!--************************************
                    Community End
            *************************************-->
            <!--************************************
                    Services V Three Start
            *************************************-->
            <section class="tg-sectionspace tg-overlapcontent tg-paddingbottomzero tg-bgwhite tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="tg-services tg-servicesvthree">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="tg-imgshortcode tg-imgshadow ">
                                    <figure  style="width: 530px"><img  class="reveal-3" style="width: 580px !important;" src="{{ asset('site/images/allhome/ceomargo.jpeg') }}" alt="image description"></figure>
                            </div>
                                <div style="background-color: #222428; padding-top: 20px!important; padding-bottom: 20px!important;" class="tg-themefeatures tg-themefeaturesvfive">
                                    <div class="tg-themefeature reveal-3">
                                        <h3  style="color: yellow">Pensée du jour</h3>
                                        <div class="tg-description">
                                            <p style="color: white">
                                            Aucun reve n'est trop grand aucun reveur n'est trop petit. Si tu travailles dur
                                                tu as toutes les chances de t'en sortir
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="tg-service">
                                        <h2 class="reveal-7" style="padding-top: 20px">Qui est Ibrahima DIALLO
                                            <span></span></h2>
                                        <div style="background-color: black; padding-top: 20px!important; padding-bottom: 20px!important;" class="tg-themefeatures tg-themefeaturesvfive">
                                            <div class="tg-themefeature reveal-4">
                                                <span  class="tg-themefeatureicon">1</span>
                                                <h3 style="color: yellow">Leader</h3>
                                                <div class="tg-description">
                                                <p style="color: white">
                                                    Président de deux entreprises, M. DIALLO est un entrepreneur, Manager,
                                                    chercheur sur les facteurs clés de réussite bien-être et Conférencier international
                                                    en Stratégie du Leadership & Entrepreneurship.
                                                </p>
                                                </div>
                                            </div>
                                            <div class="tg-themefeature  reveal-4">
                                                <span class="tg-themefeatureicon">2</span>
                                                <h3  style="color: yellow">Entrepreneur</h3>
                                                <div class="tg-description">
                                                    <p style="color: white">Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos consequat.</p>
                                                </div>
                                            </div>
                                            <div class="tg-themefeature  reveal-4">
                                                <span class="tg-themefeatureicon">3</span>
                                                <h3  style="color: yellow">Coach</h3>
                                                <div class="tg-description">
                                                    <p style="color: white">
                                                        Il est aussi appelé coach pour avoir formé un grand nombre de professionnels et accompagné plusieurs personnes qui
                                                        excellent maintenant dans leur domaine notamment grâce à ses séminaires et programmes en ligne.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Services V Three End
            *************************************-->
            <!--************************************
                    Statistics Start
            *************************************-->


    </section>
            <div class="container-fluid">
                <div class="row">
                    <div class="tg-blogpost tg-blogpostvtwo tg-blogpostvfive tg-bglight">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <article class="tg-post">
                                <figure>
                                    <span class="tg-postcategory">work</span>
                                    <img style="height: 368px" src="{{ asset('site/images/blog/2.jpg') }}" alt="image description">
                                    <figcaption>
                                        <div class="tg-postcontent">
                                            <div class="tg-posttitle">
                                                <h3><a href="javascript:void(0);">Inspired by Italian Style</a></h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.</p>
                                            </div>
                                            <ul class="tg-postmetadata">
                                                <li>
                                                     <span>By <a href="javascript:void(0);(0);">Ibrahima DIALLO</a></span>
                                                </li>
                                                <li><time datetime="2017-07-07">1 Mars 2020</time></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="tg-post">
                                <figure>
                                    <span class="tg-postcategory">Videos</span>
                                    <img style="height: 368px" src="{{ asset('site/images/blog/2.jpeg') }}" alt="image description">
                                    <figcaption>
                                        <div class="tg-postcontent">
                                            <div class="tg-posttitle">
                                                <h3><a href="javascript:void(0);">Inspired by Italian Style</a></h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.</p>
                                            </div>
                                            <ul class="tg-postmetadata">
                                                <li>
                                                     <span>By <a href="javascript:void(0);(0);">Ibrahima DIALLO</a></span>
                                                </li>
                                                <li><time datetime="2017-07-07">2 Mars 2020</time></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                    <a class="tg-btnplay" href="https://www.youtube.com/watch?v=A5B5uGEancU" data-rel="prettyPhoto[video]"><i class="icon-play3"></i></a>
                                </figure>
                            </article>
                            <article class="tg-post">
                                <figure>
                                    <span class="tg-postcategory">work</span>
                                    <img  style="height: 368px" src="{{ asset('site/images/blog/4.jpg') }}" alt="image description">
                                    <figcaption>
                                        <div class="tg-postcontent">
                                            <div class="tg-posttitle">
                                                <h3><a href="javascript:void(0);">Inspired by Italian Style</a></h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.</p>
                                            </div>
                                            <ul class="tg-postmetadata">
                                                <li>
                                                     <span>By <a href="javascript:void(0);(0);">Ibrahima DIALLO</a></span>
                                                </li>
                                                <li><time datetime="2017-07-07">4 Mars 2020</time></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="tg-post">
                                <figure>
                                    <span class="tg-postcategory">Videos</span>
                                    <img style="height: 368px" src="{{ asset('site/images/blog/1.jpeg') }}" alt="image description">
                                    <figcaption>
                                        <div class="tg-postcontent">
                                            <div class="tg-posttitle">
                                                <h3><a href="javascript:void(0);">Inspired by Italian Style</a></h3>
                                            </div>
                                            <div class="tg-description">
                                                <p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.</p>
                                            </div>
                                            <ul class="tg-postmetadata">
                                                <li>
                                                      <span>By <a href="javascript:void(0);(0);">Ibrahima DIALLO</a></span>
                                                </li>
                                                <li><time datetime="2017-07-07">8 Mars 2020</time></li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                    <a class="tg-btnplay" href="https://www.youtube.com/watch?v=A5B5uGEancU" data-rel="prettyPhoto[video]"><i class="icon-play3"></i></a>
                                </figure>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
            <!--************************************
                    Statistics End
            *************************************-->
            <!--************************************
                    Our Main Goal Start
            *************************************-->
    <section style="background-color: #ffb400 !important; background-image: url( {{ asset('site/images/allhome/electrician_19.png') }} ); background-position: top center; " class="tg-sectionspace  tg-whitecontent tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
                    <div class="tg-sectionhead tg-sectionheadvtwo">
                        <div class="tg-sectiontitle">
                            <h2 style="color: black">Clients Feedback</h2>
                        </div>
                        <div class="tg-description">
                            <p style="color: black; font-family: 'Manjari Regular'">Chez Margo Business ,l'accompagnement et  la satifaction de nos client sont notre but principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-clientfeedbackslider" class="tg-clientfeedbackslider owl-carousel tg-clientfeedbacks tg-clientfeedbacksvtwo">
                        <div class="item tg-clientfeedback">
                            <div class="tg-box">
                                <div class="tg-description">
                                    <p> Les Formations de Ibrahima DIALLO sont sans conteste le meilleur moyen pour passer notre vie au niveau supérieur !
                                        Je recommande à tout le monde de suivre ces formations ! Peu importe votre situation, ces formations vous feront grandir!t.</p>
                                </div>
                            </div>
                            <div class="tg-clientinfo">
                                <div class="tg-namedesignation">
                                    <h3>John Doe</h3>
                                    <h4 style="color: black">Manager at GreenTech</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item tg-clientfeedback" style="border-color: yellow !important;">
                            <div class="tg-box">
                                <div class="tg-description">
                                    <p style="text-align: justify">
                                        Les enseignements de Ibrahima DIALLO sont extrêmement puissants. Ils m’ont permis de connaître et d’appliquer les leviers pour atteindre une philosophie de vie et
                                        comportementale inédites qui m’amènent à déjouer les statistiques et à réussir dans ce que j’entreprends. Merci pour ce travail formidable !
                                    </p>
                                </div>
                            </div>
                            <div class="tg-clientinfo">
                                <div class="tg-namedesignation">
                                    <h3 style="color: white">Aïcha FALL</h3>
                                    <h4 style="color: black">Entrepreneur</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item tg-clientfeedback">
                            <div class="tg-box">
                                <div class="tg-description">
                                    <p style="text-align: justify;">
                                        Les Formations de Ibrahima DIALLO sont sans conteste le meilleur moyen pour passer notre vie au niveau supérieur !
                                        Je recommande à tout le monde de suivre ces formations ! Peu importe votre situation, ces formations vous feront grandir!</p>
                                </div>
                            </div>
                            <div class="tg-clientinfo">
                                <div class="tg-namedesignation">
                                    <h3 style="color: white">Moustapha NDIAYE</h3>
                                    <h4 style="color: black">DG Senegal Service Etudiant</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </main>
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        @include('site.footer')
        <!--************************************
                Footer End
        *************************************-->
    </div>
</div>
<!--************************************
        Wrapper End
*************************************-->
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
