@extends('layouts.app')
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    @section('title', $service->name)
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')

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
            <div class="">

                <div class="col-md-5 text-left pr20 mt50 mb50">
                   <div>
                       <h3 class="bold dark pb5">Ruya digital solution</h3>
                       <p class="lead-3 dark pr10 ">
                       We are a professional Laravel Development Company, offering specialized services which help you
                           to realize the full potential of Laravel framework. We carefully understand the specific needs
                           of our client and develop solutions that meet their needs perfectly.
                           If you have the idea of developing a website or a mobile app, we would help
                           you bring that idea into reality by utilizing the power of Laravel.
                       </p>
                   </div>
                </div>

                <div class="col-md-7 mt50 mb50">
                    <div class="video-container">
                        <iframe src="//player.vimeo.com/video/115919099?color=e73332&title=0&amp;byline=0&amp;portrait=0" width="460"
                                height="265" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

        </div>

    </section>
<!-- end Description -->
    <!-- packs -->
    <section class="pt60 pb80 bg-white" id="packs">
        <div class="container">
            <h2 class="uppercase bold">Our package</h2>
            <p class="lead-3 dark text-justify-lg">The info below allows you to compare the packages. Choose which one suits best your business goals and targeted audience.
                We guarantee to start video shooting process as soon as we sign the contract and brief all details.</p>
        </div>
        <div class="container pt30 pb30">
            <div class="pt30 pb30">
                <div class="container bg-grey-2">
                    <div class="row">
                        <div class="col-md-6 pt30 pb20 pl30 pr30">
                            <h3 class="dark bold pt0 mt0">Micro</h3>
                            <p class="dark pl10">
                                Vivamus nunc nunc, lacinia ac nulla eget. Vivamus nunc nunc, lacinia ac nulla eget, hendrerit ultrices sem.
                                Pellentesque congue sodales lacinia. In eu massa semper, aliquam augue in, auctor nisi. Aliquam pharetra orci ligula, et dignissim neque porttitor vel. Curabitur quis malesuada erat,
                                in condimentum urna.
                            </p>
                            <ul class="list-icons list-group-item-text pl20">
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> 45 seconde</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> 5 signes Animé</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> Voix original</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> Annonce publicitaire</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> Design moderne</li>
                            </ul>
                            <div class="d-flex pt15 pl0 block-sm">
                                <a href="#" class="btn btn-lg btn-primary lead-3">Commander le pack <i class="ion ion-ios-cart"></i></a>
                                <a href="#" class="btn btn-lg btn-ghost-color lead-3">Lire les details <i class="ion ion-chevron-down"></i></a>

                            </div>
                        </div>
                        <div class="col-md-6 pt30 pb20 pl30 pr30">
                            <div class="d-flex" style="justify-content:space-between">
                                <img src="{{asset('img/app/animated1.gif')}}" alt="" width="275" height="190">
                                <img src="{{asset('img/app/animated2.gif')}}" alt="" width="275" height="190">
                            </div>
                            <div class="d-flex pt20 " style="justify-content:space-between">
                                <img src="{{asset('img/app/animated1.gif')}}" alt="" width="275" height="190">
                                <img src="{{asset('img/app/animated2.gif')}}" alt="" width="275" height="190">
                            </div>
                        </div>
                    </div>
                    <div class="">

                    </div>
                </div>
            </div>
            <div class="pt30 pb30">
                <div class="container bg-grey-2">
                    <div class="row">
                        <div class="col-md-6 pt30 pb30 pl30 pr30">
                            <h3 class="dark bold pt0 mt0">Standart</h3>
                            <p class="lead-3 dark pl10">It includes creating simple visuals, English voiceover, and stock music</p>
                            <div class="d-flex pt15 pb15 pl0 block-sm">
                                <a href="#" class="btn btn-lg btn-primary lead-3">Commander le pack <i class="ion ion-ios-cart"></i></a>
                                <a href="#" class="btn btn-lg btn-ghost-color lead-3">Visioner l'example <i class="ion ion-play"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 pt30 pb30 pl30 pr30">
                            <div class="d-flex " style="justify-content:space-between">
                                <img src="{{asset('img/app/animated3.gif')}}" alt="" width="275" height="200">
                                <img src="{{asset('img/app/animated4.gif')}}" alt="" width="275" height="200">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pt30 pb30">
                <div class="container bg-grey-2">
                    <div class="row">
                        <div class="col-md-6 pt30 pb30 pl30 pr30">
                            <h3 class="dark bold pt0 mt0">Pro</h3>
                            <p class="lead-3 dark pl10">It includes creating simple visuals, English voiceover, and stock music</p>
                            <div class="d-flex pt15 pb15 pl0">
                                <a href="#" class="btn btn-lg btn-primary lead-3">Commander le pack <i class="ion ion-ios-cart"></i></a>
                                <a href="#" class="btn btn-lg btn-ghost-color lead-3">Visioner l'example <i class="ion ion-play"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 pt30 pb30 pl30 pr30">
                            <div class="d-flex " style="justify-content:space-between">
                                <img src="{{asset('img/app/animated5.gif')}}" alt="" width="275" height="200">
                                <img src="{{asset('img/app/animated1.gif')}}" alt="" width="275" height="200">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="pt60 pb80 bg-white" >
        <div class="container">
            <div class="row" style="margin-top:-0vh">
                <div class="app-gallery cbp" id="js-grid-slider">

                    <div class="cbp-item">
                        <a href="{{asset('img/app/site.jpg')}}" class="cbp-lightbox cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('img/app/site.jpg')}}" alt="#">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item">
                        <a href="{{asset('img/portfolio/app/1.jpg')}}" class="cbp-lightbox cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('img/portfolio/app/1.jpg')}}" alt="#">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item">
                        <a href="{{asset('img/portfolio/app/1.jpg')}}" class="cbp-lightbox cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('img/portfolio/app/1.jpg')}}" alt="#">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item">
                        <a href="{{asset('img/portfolio/app/1.jpg')}}" class="cbp-lightbox cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('img/portfolio/app/1.jpg')}}" alt="#">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item">
                        <a href="{{asset('img/portfolio/app/1.jpg')}}" class="cbp-lightbox cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{asset('img/portfolio/app/1.jpg')}}" alt="#">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Slide -->
<!-- packs -->
        <section class="pt60 pb80 bg-grey-2" id="packs">
            <div class="col-sm-8 mr-auto text-center mb60">
                <h2>Commandiez immédiatement.</h2>
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
