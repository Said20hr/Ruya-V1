@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title','commander')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')

    <!-- hero page -->

    <!-- End hero page-->
    <!-- Description -->

    <section class="hero-video parallax overlay bg-img-9">
        <div class="hero-container container">
            <div class="hero-content text-center">

                <div class="col-sm-12 mr-auto white text-center pt50 pb100">
                    <h1 class="large "><span class="bold">Pack micro </span></h1>
                    <h5 class="subheading mt20 mb20">Ruya motion</h5>
                    <a href="#home-portfolio" class="btn btn-lg btn-primary btn-circle btn-scroll mt10 hidden-xs lead-3">commander d'autres services</a>
                </div>



            </div>
        </div>
    </section>
    <!-- end Description -->
    <!-- packs -->
    <section class="pt100 pb140 bg-img-12" id="packs">
        <div class="container">
            <div class="row ">
                <div class="col-md-7">
                    <div class="text-center pb30">
                        <h3 class="bold dark">Commander </h3>
                        <p class="lead-3 dark">So excited to connect with you through this form or contact us directly<br>
                            <a href="tel:+0697883500" class="dark bold">(+213) 0697883500</a> Ou
                            <a href="tel:+2130656489587" class="dark bold"> (+213) 0656489587</a></p>
                    </div>
                    <div class="pt60 pb30 pl20 pr20 bg-grey bor3" style="border-radius: 8px">
                        <form action="">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pb20">
                                    <label for="phone">
                                        <input id="phone" type="text" name="phone" placeholder="Numéro du téléphone....">
                                    </label>
                                </div>
                                <div class="col-md-6 pb20">
                                    <label for="name">
                                        <input id="name" type="text" name="phone" placeholder="Votre nom....">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pb20">
                                    <label for="email">
                                        <input id="email" type="email" name="email" placeholder="Adresse Email...">
                                    </label>
                                </div>
                                <div class="col-md-6 pb20">
                                    <select id="name" type="text" name="phone" class="selection">
                                        <option value="">Vous êtes...</option>
                                        <option value="">Individu</option>
                                        <option value="">Entreprise</option>
                                        <option value="">StartUp</option>
                                        <option value="">Sarl/Eurl</option>
                                        <option value="">Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pb20">
                                    <select id="pack" type="text" name="phone" class="selection bold" >
                                        <option value="Micro" class="">Package: Micro</option>
                                        <option value="Standard" class="">Package: Standard</option>
                                        <option value="Avance" class="">Package: Avancé</option>
                                        <option value="Autre" class="">Autre...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-left" id="budget" style="display: none">
                                <div class="col-md-12 ">
                                    <h5 class=" dark uppercase pb5 bold">Votre budget ?</h5>
                                    <ul class="">
                                        <li class="col-md-3 d-flex pt10 pb10 radio-box" >
                                            <input type="radio" name="price" id="exampleRadios1" value="option1" checked data-id="1">
                                            <label class="ml10 fs-15" for="exampleRadios1">Moins de 5O,OOO DA</label>
                                        </li>
                                        <li class="col-md-3 d-flex pt10 pb10 radio-box">
                                            <input type="radio" name="price" id="exampleRadios2" value="option2" data-id="2">
                                            <label class="ml10 fs-15" for="exampleRadios2">50,000 DA- 100,000 DA</label>
                                        </li>
                                        <li class="col-md-3 d-flex pt10 pb10 radio-box">
                                            <input type="radio" name="price" id="exampleRadios3" value="option3" data-id="3">
                                            <label class="ml10 fs-15" for="exampleRadios3">10,000 DA - 15,000 DA</label>
                                        </li>
                                        <li class="col-md-3 d-flex pt10 pb10 radio-box">
                                            <input type="radio" name="price" id="exampleRadios4" value="option4" data-id="4">
                                            <label class="ml10 fs-15" for="exampleRadios4">Plus de 200,000 DA</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pb20">
                                    <label for="devis">
                                        <textarea name="devis" id="devis" cols="30" rows="10" class="textarea" placeholder="Ecrivez votre message..."></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="pb20 text-right">
                                <button class="btn btn-lg btn-primary">Envoyez <i class="ion ion-android-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text-center pb40">
                        <h3 class="bold dark">Ou contactez-nous maintenant! </h3>
                        <div class="text-left pt40 pl30">
                            <div class="pt10 pb10">
                                <h4 class="pb10 pt5"><i class="icon ion-android-pin pr10" aria-hidden="true"></i> Cité AADL Blida Ouled Yaich, Algerié</h4>
                                <h4 class="pb10 pt5"><i class="icon ion-ios-email pr10"a-hidden="true"></i>  contact@ruya.studio</h4>
                                <h4 class="pb10 pt5"><i class="icon ion-ios-email pr10"a-hidden="true"></i>  motion@ruya.studio</h4>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>






</body>
</html>
