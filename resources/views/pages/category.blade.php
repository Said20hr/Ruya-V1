@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'CategoryName')
</head>
<body>
@section('content')

    <!-- hero page -->
        <section class="hero-fullwidth parallax  overlay bg-img-1">
            <div class="hero-container container">
                <div class="hero-content text-center">

                    <div class="col-sm-12 mr-auto text-center pt20">
                        <h1 class="large white-until-load mt20 white"><span class="bold">Category</span> Name</h1>
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
                    <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
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

<!-- packs -->
        <section class="pt60 pb80 bg-grey-2" id="packs">
            <div class="col-sm-8 mr-auto text-center mb60">
                <h2>Les packs disponible</h2>
                <hr class="separator">
                <p>We create experiences that transform brands, grow businesses and make<br>people’s lives better. We are dedicated to your success!</p>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-4 ">
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
                <div class="">

                </div>
            </div>
        </section>
<!-- End Slide -->



@endsection
</body>
</html>
