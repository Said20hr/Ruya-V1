@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'contact')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')
        <!-- Page Hero -->
        <section class="hero-fullwidth parallax overlay" style="background-image: url({{asset('img/backgrounds/2480558.jpg')}});">
            <div class="hero-container container">
                <div class="hero-content text-center">
                    <div class="col-sm-12 text-center white">
                        <h1 class="bold">Restons en contact</h1>
                        <hr class="separator">
                        <h5 class="subheading">Nous vous remercions de votre intérêt et prendrons rapidement contact avec vous.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Hero -->

        <!-- Start Contact Form Section -->
        <section class="pt100 pb90">
            <div class="container">
                @if(count($errors) >0 )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            @if(session()->has('success_message'))
                        <div class="alert alert-success">{{session()->get('success_message')}}</div>
                    @endif
                <div class="row">
                    <div class="contact col-md-8">
                        <div id="message"></div>
                        <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
                        <form method="post" action="{{route('contact.form')}}">
                            @csrf
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
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=AADL,%20N29,%20Ouled%20Ya%C3%AFch,%20Blida,%20Algeria&t=&z=13&ie=UTF8&iwloc=&output=embed">

            </iframe></div>
        <!-- End Google Map -->

@endsection
</body>
</html>
