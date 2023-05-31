@extends('layout.master', [
    'nomVue'=> 'Nous contactez',
    'sousTitle'=> 'Contacts',
    'titreFavicon'=> 'Contacts',
])

@section('content')
    <div class="sc_contact_us_section sc_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="top_serv_box">
                        <ul>
                            <li class="galery_hover_div top_serv_box_txt cnt_box_txts wow  zoomIn animated"
                                data-wow-duration="1.3s"
                                style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <div class="gallery_cont1_img cntct_icon">
                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                </div>
                                <span>localisation</span>
                                <p class="sc_bottompadder10">6 rue d'Armaillé -
                                    <br>75017 paris </p>
                            </li>
                            <li class="galery_hover_div top_serv_box_txt  cnt_box_txts wow  zoomIn animated"
                                data-wow-duration="1.3s"
                                style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <div class="gallery_cont1_img cntct_icon">
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                                <span>adresse mail</span>
                                <p class="sc_bottompadder10"><a
                                        href="#" class="__cf_email__"
                                        data-cfemail="">contact.agssas@gmail.com</a>
                                    <br><a href="#"
                                           class="__cf_email__" data-cfemail="">contact.agssas@gmail.com</a>
                                </p>
                            </li>
                            <li class="galery_hover_div top_serv_box_txt cnt_box_txts wow  zoomIn animated"
                                data-wow-duration="1.3s"
                                style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <div class="gallery_cont1_img cntct_icon">
                                    <a href="#"><i class="fa fa-phone"></i></a>
                                </div>
                                <span>contact</span>
                                <p class="sc_bottompadder10">06 22 67 22 41
                                    <br>07 49 50 82 99</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="cmnt_area_div_mn sc_toppadder80 sc_bottompadder80">
                        {{-- <div class="cmnt_area sc_bottompadder50">
                            <div class="abt_heading_wrapper">
                                <h1 class="med_bottompadder20">Commentaire</h1>

                            </div>
                        </div> --}}
                        <div class="row">
                            {{-- <form action="#" method="post">
                                <div class="cont_main_section sc_toppadder30">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="contect_form1">
                                            <input type="text" name="full_name" placeholder="Nom complet" class="require"><i
                                                class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="contect_form1">
                                            <input type="email" name="email" placeholder="E-mail" class="require"
                                                   data-valid="email" data-error="Email should be valid."><i
                                                class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="contect_form4">
                                            <textarea rows="6" name="message" placeholder="Message"
                                                      class="require"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="response"></div>
                                        <div class="cntct_2_btn_wrapper sc_toppadder40">
                                            <button type="button" class="submitForm" type="contact">Envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
