<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
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
                                        <a href="#">Se connecter</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="tg-pushpage reveal-2">
    <div id="tg-innerbanner" class="tg-innerbanner">
        <figure data-vide-bg="{{ asset('site/images/slider/sl2.jpeg') }}" data-vide-options="position: 0% 50%">
            <figcaption>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1
                                style="text-shadow: 2px 0px 3px rgba(8,79,104,0.67); "
                            ><span style="font-family: 'Lora'; background-image: linear-gradient(135deg,#e09900 45%,rgba(0,0,0,0) 30%) !important;"> Margo Business</span></h1>
                        </div>
                        <div class="tg-description">
                            <h1 style="padding-top: 15px ;font-size: 30px ; font-family: 'Lora'; color: white ;text-shadow: 2px 0px 3px rgba(8,79,104,0.67)">creez une vie selon vos propres termes</h1>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
</div>
</div>
