@extends('layout.master', [
    'nomVue' => 'Nos références',
    'sousTitle' => 'Références',
    'titreFavicon' => 'Références',
])

@section('content')
    <div class="about_us_section sc_toppadder100 sc_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <div class="abt_img">
                            <img src="{{ asset('images/lcl.png') }}" alt="img" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <div class="abt_img">
                            <img src="{{ asset('images/cic.jpeg') }}" alt="img" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <div class="abt_img">
                            <img src="{{ asset('images/bnp.png') }}" alt="img" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <div class="abt_img">
                            <img src="{{ asset('images/ca.png') }}" alt="img" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <div class="abt_img">
                            <img src="{{ asset('images/nord.png') }}" alt="img" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <div class="abt_img">
                            <img src="{{ asset('images/sg.png') }}" alt="img" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_us_section sc_toppadder100 sc_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abt_txt" style="color: black">
                        <h2 class="sc_toppadder30" style="color: #E50914">Nous avons surveillé des sites des bâtiments à
                            désamiantage en Province</h2>
                        {{-- <p class="sc_toppadder10" style="color: black">
                        <b style="font-size: 15px; color: #E50914">Fort de notre expérience, nous sommes spécialisés
                            dans le gardiennage, la surveillance et l'intervention pour assurer une prestation de
                            meilleure qualité et maintenir le bon fonctionnement de :</b>
                    </p> --}}
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> LILLE
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> REIMS
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> TROYES
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> PROVIN
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> BESANÇON
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> PARIS
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> ROUEN
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> PAU
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> ORLÉANS

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abt_txt" style="color: black">
                        <h2 class="sc_toppadder30" style="color: #E50914">Des chantiers de construction</h2>
                        {{-- <p class="sc_toppadder10" style="color: black">
                        <b style="font-size: 15px; color: #E50914">Fort de notre expérience, nous sommes spécialisés
                            dans le gardiennage, la surveillance et l'intervention pour assurer une prestation de
                            meilleure qualité et maintenir le bon fonctionnement de :</b>
                    </p> --}}
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Paris Châteauroux
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Havre
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Rouen
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Creusot
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Lille

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
