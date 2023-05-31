<div id="preloader">
    <div id="status"><img src="{{ asset('images/preloader.gif') }}" id="preloader_image" alt="loader">
    </div>
</div>

<div class="sc_title_section">
    <div class="sc_img_overlay"></div>
    <div class="main_sc_wrapper">
        <div class="container">
            <div class="row">
                <div class="main-header">
                    <div class="top-header">
                        <div class="container">
                            <div class="col-lg-6 col-md-7 col-xs-12 col-sm-12 top_hedr_response">
                                <div class="header_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="top_heading_slide">
                                                <ul>
                                                    <li style="font-size: 22px">
                                                        <a href="#"><i class="flaticon-security-camera"></i>
                                                            Réactivité -
                                                            Disponibilité
                                                            <span class="hidden-sm hidden-xs">-
                                                                Qualité
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="top_heading_slide">
                                                <ul>
                                                    <li style="font-size: 22px">
                                                        <a href="#"> <i class="flaticon-security-camera"></i>
                                                            Gardiennage,
                                                            prévention
                                                            <span class="hidden-sm hidden-xs"> &
                                                                sécurité privée.
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="top_heading_slide">
                                                <ul>
                                                    <li style="font-size: 22px">
                                                        <a href="#">
                                                            <i class="flaticon-security-camera"></i> <span
                                                                class="hidden-sm hidden-xs">Le meilleur partenaire pour
                                                                votre
                                                                protection</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-xs-12 col-sm-12 top_icon_header">

                                <div class="right-side float-right">
                                    <ul>
                                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border icon"><i
                                                    class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border icon"><i
                                                    class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /.right-side -->

                            </div>
                            <!-- /.top-header -->
                        </div>
                        <!-- /.top-header -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.menu')

    <div class="title_main_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="sc_tittle_cont_wrapper">
                            <div class="sc_tittle_cont">
                                <h1>{{ $nomVue }} </h1>
                                <ul class="page-breadcrum">
                                    <li><a href="{{ url('/') }}">Accueil</a>
                                    </li>
                                    <li class="icon_breamcum"> ></li>
                                    <li>{{ $sousTitle }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
