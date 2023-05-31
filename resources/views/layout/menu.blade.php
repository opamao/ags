<div class="transparent-menu header-area hidden-menu-bar stick">
    <div class="container">
        <div class="row">
            <div class="main-menu-wrapper clear-fix">
                <div class="container">
                    <div class="row">
                        <div class="logo float-left" style="background: white">
                            <a href="{{ url('/') }}" style="vertical-align:middle;"><img height="100" width="175"
                                    style="padding-left: 50px; padding-right: 50px" src="{{ asset('images/logo.png') }}" alt="LOGO"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc_navigation hidden-sm hidden-xs">
                <nav id="primary-nav" class="dropdown">
                    <ul class="dropdown menu">
                        <li><a href="{{ url('/') }}" title="">Accueil</a></li>
                        <li><a href="{{ url('about') }}" title="">Qui sommes-nous</a></li>
                        <li><a href="{{ url('service') }}" title="">Nos services</a></li>
                        <li><a href="{{ url('prestation') }}" title="">Nos prestations</a></li>
                        <li><a href="{{ url('reference') }}" title="">Nos références</a></li>
                        <li><a href="{{ url('contact') }}" title="">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-menu-area visible-sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 cc_menu_top_margin">
                            <div class="mobile-menu">
                                <nav style="display: block;">
                                    <ul class="nav">
                                        <li><a href="{{ url('/') }}">Accueil</a></li>
                                        <li><a href="{{ url('about') }}">Qui sommes-nous</a></li>
                                        <li><a href="{{ url('service') }}">Nos services</a></li>
                                        <li><a href="{{ url('prestation') }}">Nos prestations</a></li>
                                        <li><a href="{{ url('reference') }}">Nos références</a></li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
