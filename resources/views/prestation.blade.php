@extends('layout.master', [
    'nomVue' => 'Nos prestations',
    'sousTitle' => 'Prestations',
    'titreFavicon' => 'Prestations',
])

@section('content')
    <div class="about_us_section sc_toppadder100 sc_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    {{-- <div class="abt_heading_wrapper choose_line">
                        <h1 class="sc_bottompadder20">Qui sommes-nous</h1>
                    </div> --}}
                    <div class="abt_txt">
                        <h2 class="sc_toppadder30" style="color: #E50914">Maître chien</h2>
                        <p class="sc_toppadder10" style="color: black">Le maître chien et son chien
                            <br>
                            <b style="font-size: 15px; color: #E50914">+</b> Un tandem complémentaire efficace pour assurer
                            une protection et une surveillance optimale de vos sociétés ou dépôts sensibles.
                        </p>
                        <h2 class="sc_toppadder30" style="color: #E50914">Ronde</h2>
                        <p class="sc_toppadder10" style="color: black">Une présence dissuasive
                            <br>
                            <b style="font-size: 15px; color: #E50914">+</b> En complément d'un mandat de surveillance
                            statique en liaison permanente avec la centrale, nos agents effectuent des passages pour
                            contrôler vos sites.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="aboutus_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="abt_img">
                                    <img src="{{ asset('images/chien.jpg') }}" alt="img" class="img-responsive">
                                </div>
                            </div>
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
                    <div class="aboutus_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="abt_img">
                                    <img src="{{ asset('images/homme.jpg') }}" alt="img" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abt_txt" style="color: black">
                        <h2 class="sc_toppadder30" style="color: #E50914">Surveillance et gardiennage</h2>
                        <p class="sc_toppadder10" style="color: black">
                            <b style="font-size: 15px; color: #E50914">Fort de notre expérience, nous sommes spécialisés
                                dans le gardiennage, la surveillance et l'intervention pour assurer une prestation de
                                meilleure qualité et maintenir le bon fonctionnement de :</b>
                        </p>

                        <b style="font-size: 15px; color: #E50914">+</b> Complexe commerciaux
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Parkings
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Boutiques et grandes surfaces commerciales
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Établissements publics
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Foyer d'hébergement d'urgence
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Événements/Manifestations
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Chantier en construction
                        <br>
                        <b style="font-size: 15px; color: #E50914">+</b> Appartements, maisons et grands domaines

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
                        <h2 class="sc_toppadder30" style="color: #E50914">Intervention 24/24 et 7J/7</h2>
                        <p class="sc_toppadder10">
                            <b style="font-size: 15px; color: #E50914">Notre équipe d'intervention est opérationnelle
                                24h/24h7J/7 dans toute la France.
                                Nos agents sont formés aux interventions diverses et multiples. Nous travaillons étroitement
                                avec les forces de l'ordre afin de mettre fin rapidement à toute intrusion ou occupations
                                illicite.</b>
                        </p>

                        <b style="font-size: 15px; color: #E50914">1.</b> Tenues confortables avec insigne distinctif dans le respect de votre image de marque.
                        <br>
                        <b style="font-size: 15px; color: #E50914">2.</b> Contrôleur de rondes
                        <br>
                        <b style="font-size: 15px; color: #E50914">3.</b> Liaison radio (talkie-walkie)
                        <br>
                        <b style="font-size: 15px; color: #E50914">4.</b> Pointeuse (prise et fin de service)
                        <br>
                        <b style="font-size: 15px; color: #E50914">5.</b> Main courante électronique (événements sur site)
                        <br>
                        <b style="font-size: 15px; color: #E50914">6.</b> GSM PTI (protection du travailleur isolé)
                        <br>
                        <b style="font-size: 15px; color: #E50914">7.</b> Véhicules d'intervention
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="aboutus_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="abt_img">
                                    <img src="{{ asset('images/camera.jpeg') }}" alt="img" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
