@extends('layouts.app')
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    @section('title', 'CategoryName')
</head>
<body>
@section('content')
@foreach($services as $service)
    <!-- hero page -->
        <section class="hero-fullwidth parallax overlay" style="background-image: url({{asset('storage/'.$service->Background_image)}})">
            <div class="hero-container container">
                <div class="hero-content text-center">

                    <div class="col-sm-12 mr-auto text-center pt20">
                        <h1 class="large white-until-load mt20 white"><span class="bold">{{$service->name}}</span></h1>
                        <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">We Set You Apart To Grow Online Quickly</h5>
                        <hr class="separator">
                    </div>
                </div>
            </div>
        </section>
<!-- End hero page-->
<!-- Description -->
    <section class="bg-grey">
        <div class="container pt40 pb40">
            <div class="vertical-align">

                <div class="col-md-6 text-left pr30 mt40 mb40">
                    <h2>Category description</h2>
                    <p>{!! $service->description !!}</p>
                </div>

                <div class="col-md-6  mt50 mb50">
                    <div class="video-container">
                        <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>

    </section>
<!-- end Description -->
@endforeach
<!-- packs -->
        <section class="pt60 pb80 bg-grey-2" id="packs">
            <div class="col-sm-8 mr-auto text-center mb60">
                <h2>Les packs disponible</h2>
                <hr class="separator">
                <p>We create experiences that transform brands, grow businesses and make<br>people’s lives better. We are dedicated to your success!</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-table-featured bg-white">
                        <div class="price-box">
                            <h4>Startup</h4>
                            <h2 class="price-price">
                                <span>10 000</span>
                                <sup>DZD</sup>
                            </h2>
                            <div class="price-features text-left">
                                <ul class="list-icons">
                                    <li class="pt10"><i class="ion-android-checkmark-circle"></i>Vivamus nunc nunc dolor consectetur</li>
                                    <li class="pt10"><i class="ion-android-checkmark-circle"></i>Lacinia ac consectetu nulla eget</li>
                                    <li class="pt10"><i class="ion-android-checkmark-circle"></i>Phasellus consectetu fermentum velit</li>
                                    <li class="pt10"><i class="ion-android-checkmark-circle"></i>Aliquam pharetra consectetu orci ligula</li>
                                    <li class="pt10"><i class="ion-android-checkmark-circle"></i>Et consectetu dignissim neque porttitor</li>
                                    <li class="pt10"><i class="ion-android-checkmark-circle"></i>Sed imperdiet id est in consectetu.</li>
                                    <li class="pt10"><input class="pr10" type="checkbox"><span class="label label-primary ml10">Sed imperdiet id est in consectetu.</span></li>
                                </ul>
                            </div>
                            <div class="pt15">
                                <a href="#" class="btn btn-primary btn-md btn-appear"><span>Commander<i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="price-table-featured bg-warning">
                            <div class="price-box">
                                <h4>Startup</h4>
                                <h2 class="price-price">

                                    <span>50 000</span>
                                    <sup>DZD</sup>
                                </h2>
                                <div class="price-features text-left">
                                    <ul class="list-icons">
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Vivamus nunc nunc dolor consectetur</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Lacinia ac consectetu nulla eget</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Phasellus consectetu fermentum velit</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Aliquam pharetra consectetu orci ligula</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Et consectetu dignissim neque porttitor</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Sed imperdiet id est in consectetu.</li>
                                        <li class="pt10"><input class="pr10" type="checkbox"><span class="label label-primary ml10">Sed imperdiet id est in consectetu.</span></li>
                                    </ul>
                                </div>
                                <div class="pt15">
                                    <a href="#" class="btn btn-primary btn-md btn-appear"><span>Commander<i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="price-table-featured bg-white">
                            <div class="price-box">
                                <h4>Startup</h4>
                                <h2 class="price-price">

                                    <span>100 000</span>
                                    <sup>DZD</sup>
                                </h2>
                                <div class="price-features text-left">
                                    <ul class="list-icons">
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Vivamus nunc nunc dolor consectetur</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Lacinia ac consectetu nulla eget</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Phasellus consectetu fermentum velit</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Aliquam pharetra consectetu orci ligula</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Et consectetu dignissim neque porttitor</li>
                                        <li class="pt10"><i class="ion-android-checkmark-circle"></i>Sed imperdiet id est in consectetu.</li>
                                        <li class="pt10"><input class="pr10" type="checkbox"><span class="label label-primary ml10">Sed imperdiet id est in consectetu.</span></li>
                                    </ul>
                                </div>
                                <div class="pt15">
                                    <a href="#" class="btn btn-primary btn-md btn-appear"><span>Commander<i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 mr-auto text-center mt60 mb60">
                    <h2>Les packs personaliser</h2>
                    <hr class="separator">
                    <p>We create experiences that transform brands, grow businesses and make<br>people’s lives better. We are dedicated to your success!</p>
                </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="price-table-featured bg-white">
                                <div class="price-box">
                                    <h4>Packs Personnalise</h4>
                                    <ul class="list-group pt30 pb20 text-left">
                                        <li class="list-group-item ">
                                            <label for="" class="text-muted pb10">Durée (min)</label>
                                            <ul class="row text-left justify-content-start list-group list-space mb0 pb0">
                                                <li class="col-md-4 pt10 list-group-item mb0  mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1"> 1 min</label>
                                                </li>
                                                <li class="col-md-4 pt10 list-group-item mb0  mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                                    <label class="form-check-label" for="exampleRadios2"> 5 min</label>
                                                </li>
                                                <li class="col-md-4 pt10 list-group-item mb0  mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                                                    <label class="form-check-label" for="exampleRadios3"> 10 min</label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item ">
                                            <label for="" class="text-muted pb10">Durée (min)</label>
                                            <ul class="row text-left justify-content-start list-group list-space mb0 pb0">
                                                <li class="col-md-4 pt10 list-group-item mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1-2" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1-2"> Voice over</label>
                                                </li>
                                                <li class="col-md-4 pt10 list-group-item mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2-2" value="option2" checked>
                                                    <label class="form-check-label" for="exampleRadios2-2"> Musique</label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item ">
                                            <label for="" class="text-muted pb10">Durée (min)</label>
                                            <ul class="row text-left justify-content-start list-group list-space mb0 pb0">
                                                <li class="col-md-3 pt10 list-group-item mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1-3" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1-3"> HD</label>
                                                </li>
                                                <li class="col-md-3 pt10 list-group-item mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios2-3" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios2-3">FUll HD</label>
                                                </li>
                                                <li class="col-md-3 pt10 list-group-item mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3-3" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios3-3">UHD</label>
                                                </li>
                                                <li class="col-md-3 pt10 list-group-item mb0">
                                                    <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios4-3" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios4-3">4K</label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item ">
                                            <label for="" class="text-muted pb10">Durée (min)</label>
                                            <ul class="row text-left justify-content-start list-group list-space mb0 pb0">
                                                <li class="col-md-4 pt10 list-group-item mb0"><input class="" type="checkbox"><span class="pl10">Sed imperdiet id </span></li>
                                                <li class="col-md-4 pt10 list-group-item mb0"><input class="" type="checkbox"><span class="pl10">Sed imperdiet id </span></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item ">
                                            <label for="" class="text-muted pb10">Durée (min)</label>
                                            <ul class="row text-left justify-content-start list-group list-space mb0 pb0">
                                                <li class="col-md-4 pt10 list-group-item mb0"><input class="" type="checkbox"><span class="pl10">Sed imperdiet id </span></li>
                                                <li class="col-md-4 pt10 list-group-item mb0"><input class="" type="checkbox"><span class="pl10">Sed imperdiet id </span></li>
                                                <li class="col-md-4 pt10 list-group-item mb0"><input class="" type="checkbox"><span class="pl10">Sed imperdiet id </span></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item ">
                                            <label for="" class="text-muted pb10">Autres information</label>
                                            <ul class="row text-left justify-content-start list-group list-space mb0 pb0">
                                                <li class="col-md-12 pt10 list-group-item mb0">
                                                    <div class="">
                                                        <textarea name="subject" type="text"  placeholder="ajouter informations"/></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <div class="pt15">
                                            <a href="#" class="btn btn-primary btn-md btn-appear"><span>Envoyer<i class="ion-android-arrow-forward"></i></span></a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="price-table-featured bg-white">
                                <div class="price-box">
                                    <h4>Personaliser votre pack</h4>
                                    <div class="panel-group accordian-style1 mb0 mt30" id="accordion">
                                        <!-- First Panel -->
                                        <div class="contact col-md-12">
                                            <input name="subject" type="text"  placeholder="feature 1"/>
                                            <input name="subject" type="text"  placeholder="feature 2"/>
                                            <input name="subject" type="text"  placeholder="feature 3"/>
                                            <input name="subject" type="text"  placeholder="feature 4"/>
                                            <input name="subject" type="text"  placeholder="feature 5"/>
                                            <input name="subject" type="text"  placeholder="feature 6"/>
                                        </div>
                                    </div>

                                    <div class="pt10">
                                        <a href="#" class="btn btn-primary btn-md btn-appear mt30"><span>Envoyer<i class="ion-android-arrow-forward"></i></span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            </div>
        </section>
<!-- End Slide -->



@endsection
</body>
</html>
