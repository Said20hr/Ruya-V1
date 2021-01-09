@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Accueil')
</head>
<body>
@section('content')
<!-- Page Hero -->
<section class="hero-fullscreen">
            <div class="hero-slider navigation-thin">

                <!-- Slide -->
                @foreach($sliders as $slider)
                <div class="slide overlay" style="background-image: url({{asset('storage/'.$slider->background_image)}})">
                    <div class="hero-container container">
                        <div class="hero-content">
                            <div class="appear white text-center">
                                <p class="subheading">{{$slider->small_title}}</p>
                                <h1 class="large mt20 mb20"><strong>{{$slider->big_title}}</strong></h1>
                                <p class="hidden-xs">{{$slider->short_description  }}</p>
                                <a href="#features" class="btn btn-lg btn-primary btn-scroll mt30 mt0-xs">{{$slider->button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Slide -->

                <!-- Slide -->
                <div class="slide overlay bg-img-3">
                    <div class="hero-container container">
                        <div class="hero-content">
                            <div class="appear white text-center">
                                <p class="subheading">We Set You Apart To Grow Online</p>
                                <h1 class="large mt20 mb20">Bring your <span class="bold">business</span> to life</h1>
                                <p class="hidden-xs">We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!</p>
                                <a href="#features" class="btn btn-lg btn-primary btn-scroll mt30 mt0-xs">We're Creative</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide -->

            </div>
        </section>
<!-- End Page Hero -->

<!-- About -->
<section class="bg-grey" id="about">
            <div class="container pt40 pb40">
                <div class="vertical-align">

                    <div class="col-md-6 text-left pr30 mt40 mb40">
                        <h2>Qu'est ce que Ruya studio ? </h2>
                        <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                        <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
                    </div>

                    <div class="col-md-6 mt50 mb50">
                        <div class="video-container">
                            <iframe src="http://player.vimeo.com/video/190203519?title=0&amp;byline=0&amp;portrait=0&amp;color=000222" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- End About -->

<!-- Features -->
<section class="pt80 pb80 parallax overlay bg-shortcodes">
            <div class="container ">
                <div class="row">

                    <div class="col-sm-8 mr-auto text-center mb60 white">
                        <h2>Our Capabilities</h2>
                        <hr class="separator">
                        <p>We create experiences that transform brands, grow businesses and make<br>people’s lives better. We are dedicated to your success!</p>
                    </div>
                    <div class="col-sm-4 feature-left white">
                        <div class="box box-style8">
                        <i class="icon-telescope size-3x color pr20"></i>
                        <i class="icon-telescope back-icon"></i>
                        <div class="feature-left-content">
                            <h4>Stunning Design</h4>
                            <p class="pt10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature-left white">
                        <div class="box box-style8">
                        <i class="icon-circle-compass size-3x color pr20"></i>
                        <i class="icon-circle-compass back-icon"></i>
                        <div class="feature-left-content">
                            <h4>Retina Optimized</h4>
                            <p class="pt10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature-left white">
                        <div class="box box-style8">
                        <i class="icon-genius size-3x color pr20"></i>
                        <i class="icon-genius back-icon"></i>
                        <div class="feature-left-content">
                            <h4>Fast & Smooth</h4>
                            <p class="pt10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature-left white">
                        <div class="box box-style8">
                            <i class="icon-telescope size-3x color pr20"></i>
                            <i class="icon-telescope back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Stunning Design</h4>
                                <p class="pt10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature-left white">
                        <div class="box box-style8">
                            <i class="icon-circle-compass size-3x color pr20"></i>
                            <i class="icon-circle-compass back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Retina Optimized</h4>
                                <p class="pt10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 feature-left white">
                        <div class="box box-style8">
                            <i class="icon-genius size-3x color pr20"></i>
                            <i class="icon-genius back-icon"></i>
                            <div class="feature-left-content">
                                <h4>Fast & Smooth</h4>
                                <p class="pt10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
<!-- End Features -->

<!-- service -->
<section class="pt80 bg-grey">
            <div class="container pb50">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Nos Services</h1>
                        <hr class="separator">
                        <h5 class="subheading">TAKING OVER THE WORLD WITH SURPRISE.</h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="portfolio-no-gutter-fullwidth cbp" id="js-grid-no-gutter">
                        @foreach($services as $service)
                        <div class=" cbp-item print branding">
                               <a href="{{route('service.category',$service->slug)}}" class="cbp-caption" >
                                   <div class="cbp-caption-defaultWrap">
                                       <img src="{{asset('storage/'.$service->full_image)}}" alt="#">
                                   </div>
                                   <div class="cbp-caption-activeWrap d-flex justify-content-center" style="background: linear-gradient(to right, {{$service->color_gradiant_1}}, {{$service->color_gradiant_2}});">
                                       <div class="cbp-l-caption-alignCenter">
                                           <div class="cbp-l-caption-body">
                                               <div class="cbp-l-caption-title">
                                                   <img src="{{asset('img/assets/Ruya-Branding-Logo-white.png')}}" class="img-fluid" alt="logo">
                                                   {{$service->name}}
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </a>
                           </div>
                        @endforeach
                            @foreach($services as $service)
                                <div class=" cbp-item print branding">
                                    <a href="{{route('service.category',$service->slug)}}" class="cbp-caption" >
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('storage/'.$service->full_image)}}" alt="#">
                                        </div>
                                        <div class="cbp-caption-activeWrap d-flex justify-content-center" style="background: linear-gradient(to right, {{$service->color_gradiant_1}}, {{$service->color_gradiant_2}});">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">
                                                        <img src="{{asset('img/assets/Ruya-Branding-Logo-white.png')}}" class="img-fluid" alt="logo">
                                                        {{$service->name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </section>
<!-- End service -->

<!-- Start works List -->
<section class="pt120 pb100">
            <div class="container">
                <div class="row">

                    <div class="col-sm-8 mr-auto text-center mb60">
                        <h2>Our previous works</h2>
                        <hr class="separator">
                        <p>Try for free and start paying when you're ready. Lorem ipsum dolor sit amet, consecte<br>tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt sun.</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="portfolio-gallery-video cbp" id="js-masonry-fullwidth">
                                @foreach($portfolio as $item)
                                <div class="cbp-item print branding">
                                    <a href="https://www.youtube.com/watch?v=USVg_E7r20g" class="cbp-lightbox cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('storage/'.$item->image)}}">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title"><i class="ion-ios-play"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- End Price List -->

<!-- Testimonials -->
<section class="parallax overlay bg-img-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-10 mr-auto">
                        <div class="testimonials white owl-carousel">

                            <div>
                                <h2>What People Say</h2>
                                <hr class="separator">
                                <h4>This guys are amazing! They were so quick to respond and let me tell you, they are all knowing! I highly<br />recommend their themes! They are all about making their clients happy!</h4>
                                <h5 class="subheading">Jack Westbrook</h5>
                                <p>Web Developer</p>
                            </div>

                            <div>
                                <h2>What People Say</h2>
                                <hr class="separator">
                                <h4>I have purchased tens of templates from ThemeForest and this one is undoubtedly the best I ever tried.<br />Easy to edit, nicely coded. You guys, you did a great job here!</h4>
                                <h5 class="subheading">Lindsay Swanson</h5>
                                <a href="#">Wunderkind Inc</a>
                            </div>

                            <div>
                                <h2>What People Say</h2>
                                <hr class="separator">
                                <h4>This is one of the best themes that I bought on ThemeForest. It is well documented and well coded but<br />the best of all is the friendly and quick support behind.</h4>
                                <h5 class="subheading">Jared Jackson</h5>
                                <p>App Developer</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- End Testimonials -->

<!-- partners Section -->
        <section class="pt70 pb70 bg-grey">
            <div class="container">
                <div class="row">

                    <div id="clients-slider-2" class="owl-carousel">
                        @foreach($partners as $partner)
                        <div>
                            <a href="{{$partner->link}}" target="_blank">
                            <img src="{{asset('storage/'.$partner->image)}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
<!-- end partners Section -->
@endsection
</body>
</html>
