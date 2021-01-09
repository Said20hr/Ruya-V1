@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'portfolio')
</head>
<body>
@section('content')
        <!-- Page Hero -->
        <section class="page-title parallax overlay bg-img-1">
            <div class="page-title-content">
                <div class="container">
                    <div class="col-sm-12 text-center white">
                        <h1>Let' Get in Touch</h1>
                        <hr class="separator">
                        <h5 class="subheading">Try for free - Start paying when you’re ready.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Hero -->

        <!-- Start Contact Form Section -->
        <section class="pt100 pb90">
            <div class="container">
                <div class="row">

                    <div class="contact col-md-8">
                        <div id="message"></div>
                        <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
                        <form method="post" action="php/contact-form.php" name="contactform" id="contactform">
                            <fieldset><input name="name" type="text" id="name" placeholder="Votre Nom*"/></fieldset>
                            <fieldset><input name="email" type="text" id="email" placeholder="Votre Email*"/></fieldset>
                            <input name="subject" type="text" id="subject" placeholder="Sujet"/>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Description*"></textarea>
                            <input type="submit" class="submit btn btn-md btn-primary" id="submit" value="Envoyer Le Message" />
                        </form>
                    </div>

                    <div class="col-md-4 contact-side">
                        <div class="side-info">
                            <h4 class="pb20 ">Contactez-nous maintenant! </h4>
                           <div class="pb5">
                               <h5><i class="icon ion-android-pin pr10" aria-hidden="true"></i> 09015, Cité AADL Blida Ouled Yaich , Algerié</h5>
                           </div>
                            <div class="pb5 pt5">
                                <h5 class="pb5"><i class="icon ion-ios-telephone pr10" aria-hi aridden="true"></i> (+213) 06 56 48 95 87</h5>
                                <h5 class="pb5"><i class="icon ion-ios-telephone pr10" aria-hi aridden="true"></i> (+213) 025 26 58 84</h5>
                            </div>
                            <div class="pb5 pt5">
                                <h5 class="pb5"><i class="icon ion-ios-email pr10"a-hidden="true"></i>  contact@ruya.studio</h5>
                                <h5 class="pb5"><i class="icon ion-ios-email pr10"a-hidden="true"></i>  motion@ruya.studio</h5>
                            </div>

                        </div>
                        <div class="sidebar-share">
                            <ul class="list-inline">
                                <li><a href="https://www.facebook.com/studio.ruya" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/studio.ruya/" target="_blank"><i class="ti-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/69400627/" target="_blank"><i class="ti-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCqas7VAnMlkzHz6CMmCtfJg?pbjreload=102" target="_blank"><i class="ti-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Form Section -->

        <!-- Google Map -->
        <section
             data-map-coordinates="36.503889,  2.867083"
             data-marker-coordinates="36.503889,  2.867083"
             data-info="AADL, Ouled Yaich, Blida"
             id="map" class="map-style-1 height500">
        </section>
        <!-- End Google Map -->

@endsection
</body>
</html>
