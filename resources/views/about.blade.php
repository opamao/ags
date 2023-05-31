@extends('layout.master', [
    'nomVue' => 'Qui sommes-nous',
    'sousTitle' => 'Apropos',
    'titreFavicon' => 'Apropos',
])

@section('content')
    <div class="about_us_section sc_toppadder100 sc_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="abt_heading_wrapper choose_line">
                        <h1 class="sc_bottompadder20">Qui sommes-nous</h1>
                    </div>
                    <div class="abt_txt">
                        {{-- <h2 class="sc_toppadder30" style="color: #E50914">Des professionnels à votre écoute 24H/24
                            7J/7</h2> --}}
                        {{-- <p class="sc_toppadder10"><b style="font-size: 25px; color: #E50914">AGS</b> vous apporte la
                            meilleure réponse globale à l'évolution de vos besoins
                            en matière de sécurité, dans un esprit d'efficacité de proximité et de réactivité.
                            Préserver vos intérêts en assurant votre sécurité et la protection de vos biens est notre
                            préoccupation essentielle.
                        </p>  --}}
                        <p class="sc_toppadder10" style="color: black"><b style="font-size: 15px; color: #E50914">Dirigé par
                                des hommes de plus de
                                20 ans d'expériences</b>, AGS est une société novatrice dans son secteur d'expertise. Dotée
                            d'un important réseau, et disposant de toute une pléiade d'agents de sécurité nous permettant de
                            faire preuve d'un professionnalisme reconnu et d'une grande réactivité 24h /24 et 7j/7.</p>

                        <p class="sc_toppadder10" style="color: black">Dans le cadre d'une démarche qualité de nos
                            prestations, nous
                            contrôlons
                            chaque site
                            hebdomadairement.</p>

                        <style>
                            .owl-carousel .owl-item img {
                                display: block;
                                width: auto;
                            }
                        </style>

                        <div class="header_slider_wrapper">
                            <div class="owl-carousel owl-theme" style="width: auto;">
                                <div class="item">
                                    <div class="top_heading_slide">
                                        <img height="500" width="00" src="{{ asset('images/slide1.jpeg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="top_heading_slide">
                                        <img src="{{ asset('images/slide2.jpeg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="top_heading_slide">
                                        <img src="{{ asset('images/slide3.jpeg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="top_heading_slide">
                                        <img src="{{ asset('images/slide4.jpeg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <img src="{{ asset('images/camera.jpg') }}" width="250" height="200" alt=""> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="aboutus_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="abt_img">
                                    <img src="{{ asset('images/abt_slider.jpg') }}" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="abt_img">
                                    <img src="{{ asset('images/abt_slider.jpg') }}" alt="img" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="abt_img">
                                    <img src="{{ asset('images/abt_slider.jpg') }}" alt="img" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- <div class="counterFour">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-multiple-users-silhouette"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">612</span>
                        </div>
                        <h4><a href="#">Clients satisfaits</a></h4>

                    </div>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-protection"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">12</span>
                        </div>
                        <h4><a href="#">Années d'expérience</a></h4>

                    </div>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-policeman"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">345</span>
                        </div>
                        <h4><a href="#">Nos employés</a></h4>

                    </div>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-world"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">18</span>
                        </div>
                        <h4><a href="#">Dans le monde</a></h4>

                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div> --}}

    <div class="team_wrapper sc_toppadder100 sc_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="gallery_heading_wrapper">
                        <h2>Notre expertise </h2>
                        {{-- <h1 class="sc_bottompadder20">Notre équipe de sécurité</h1> --}}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="team_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="team_about">

                                    <div class="team_img">
                                        <img height="50" src="{{ asset('images/incendie.jpg') }}" alt="img"
                                            class="img-responsive">
                                    </div>

                                    <div class="team_txt">
                                        <h1><a href="#">Agent incendie</a></h1>
                                        {{-- <p>body guard</p> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="item">

                                <div class="team_about">
                                    <div class="team_img">
                                        <img src="{{ asset('images/agent.jpeg') }}" alt="img" class="img-responsive">

                                    </div>

                                    <div class="team_txt">
                                        <h1><a href="#">Agent de sécurité</a></h1>
                                        {{-- <p>body guard</p> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="item">

                                <div class="team_about">

                                    <div class="team_img">
                                        <img src="{{ asset('images/maitre.jpeg') }}" alt="img" class="img-responsive">

                                    </div>
                                    <div class="team_txt">
                                        <h1><a href="#">Maître chien</a></h1>
                                        {{-- <p>body guard</p> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="item">

                                <div class="team_about">

                                    <div class="team_img">
                                        <img src="{{ asset('images/fouille.jpeg') }}" alt="img" class="img-responsive">
                                    </div>
                                    <div class="team_txt">
                                        <h1><a href="#">Agent sûreté</a></h1>
                                        {{-- <p>body guard</p> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
