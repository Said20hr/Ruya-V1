@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Accueil')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
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

                <!-- Slide>
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
                < End Slide -->

            </div>
        </section>
<!-- End Page Hero -->

<!-- About -->
<section class="bg-grey   bg-img-10" >
            <div class="container pt80 pb80">
                <div class="">
                    <div class="col-md-6 text-left">
                        <h3 class="bold  dark">Qui sommes nous ?</h3>
                        <div class="pr50 pt10">
                            <div class="lead-3 text-justify-lg">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec pretium felis. Ut tempor,
                                justo non vehicula blandit, nunc magna convallis odio, eget porttitor urna erat id ante.
                                Vivamus malesuada placerat justo sed mattis. Fusce suscipit nisi pharetra odio mollis,
                                egestas aliquam velit consectetur. Quisque vel euismod augue. In blandit, magna eget euismod porttitor,
                                ligula nulla varius ipsum, sed dictum ex turpis sagittis mauris. Donec fermentum fringilla cursus.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="video-container pt50">
                            <iframe src="http://player.vimeo.com/video/190203519?autoplay=1&loop=1&title=0&amp;byline=0&amp;portrait=0&amp;color=fff&amp;border=5" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>

    <div class="container pt80 pb80 ">
        <div class="col-sm-10 mr-auto text-center mb60 ">
            <h3 class="bold  dark">Nos services</h3>
            <hr class="separator">
            <p class="lead-3 dark">Nous créons des expériences qui transforment les marques, développent les entreprises et améliorent leurs business .<br>Nous sommes dévoués à votre succès! </p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 feature-center">
                <div class="box box-style8">
                <img src="{{asset('img/services/022-digital-campaign.svg')}}" width="75" class="icone">
                <img src="{{asset('img/services/022-digital-campaign.svg')}}" class="back-icon">
                <div class="feature-left-content">
                    <h4 class="bold dark">LES ANIMATIONS GRAPHIQUE</h4>
                    <p class="pt10 dark">
                        Diffusez votre message de marque grâce à un contenu visuel créatif.
                    </p>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <div class="box box-style8">
                    <img src="{{asset('img/services/web.svg')}}" width="75" class="icone">
                    <img src="{{asset('img/services/web.svg')}}" class="back-icon">
                    <div class="feature-left-content">
                        <h4 class="bold">LES APPLICATIONS ET SITES WEB</h4>
                        <p class="pt10 dark">
                            Au bout d'un niveau de réussite supérieur avec une applications/sites Web personnalisé.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <div class="box box-style8">
                <img src="{{asset('img/services/Photography.svg')}}" width="75" class="icone">
                <img src="{{asset('img/services/Photography.svg')}}" class="back-icon">
                <div class="feature-left-content">
                    <h4 class="bold">PHOTOGRAPHIE</h4>
                    <p class="pt10 dark">
                        Boostez vos produits avec des plans de photographie et de montage flexibles.
                    </p>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <div class="box box-style8">
                <img src="{{asset('img/services/content.svg')}}" width="75" class="icone">
                <img src="{{asset('img/services/content.svg')}}" class="back-icon">
                <div class="feature-left-content">
                    <h4 class="bold">CRÉATION DE CONTENU </h4>
                    <p class="pt10 dark">
                        Nous créons du contenu dédié pour atteindre vos objectifs commerciaux.
                    </p>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <div class="box box-style8">
                <img src="{{asset('img/services/commerce.svg')}}" width="75" class="icone">
                <img src="{{asset('img/services/commerce.svg')}}" class="back-icon">
                <div class="feature-left-content">
                    <h4 class="bold">PLATEFORMES E-COMMERCE </h4>
                    <p class="pt10 dark">Gérez votre plateforme d'E-commerce avec les meilleures solutions électronique .</p>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <div class="box box-style8">
                <img src="{{asset('img/services/marketing.svg')}}" width="75" class="icone">
                <img src="{{asset('img/services/marketing.svg')}}" class="back-icon">
                <div class="feature-left-content">
                    <h4 class="bold">LE MARKETING NUMÉRIQUE </h4>
                    <p class="pt10 dark">
                        Atteignez un public ciblé grâce au marketing numérique intégré.
                    </p>
                </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Features -->
<section class="pt80 pb100 parallax overlay bg-shortcodes">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mr-auto text-center mb60 white">
                        <h3 class="bold">Nos avantages </h3>
                        <hr class="separator">
                        <p class="lead">Nous créons des expériences qui transforment les marques, développent les entreprises et améliorent leurs business .<br>Nous sommes dévoués à votre succès! </p>

                    </div>
                    <div class="col-sm-3 feature-center white">
                        <div class="box box-style2">
                            <i class="icon-tools size-6x"></i>
                            <i class="icon-tools back-icon"></i>
                            <div class="feature-left-content">
                                <h4 class="bold">Creativité</h4>
                                <p class="pt10">
                               La clé du succès sera de faire appel à notre créativité afin d'offrir des services complémentaires à nos clients,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 feature-center white">
                        <div class="box box-style2">
                            <i class="icon-lightbulb size-6x"></i>
                            <i class="icon-lightbulb back-icon"></i>
                            <div class="feature-left-content">
                                <h4 class="bold">Innovation</h4>
                                <p class="pt10">
                                    Elle définit un nouveau produit, inventif, répondant à une problématique technique et applicable industriellement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 feature-center white">
                        <div class="box box-style2">
                            <i class="icon-trophy size-6x"></i>
                            <i class="icon-trophy back-icon"></i>
                            <div class="feature-left-content">
                                <h4 class="bold">L’esprit d’équipe</h4>
                                <p class="pt10">
                                    Nous avons choisi cette valeur pour ce qu’elle apporte d’Humain, de collaboratif, de partage, et de diversité.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 feature-center white">
                        <div class="box box-style2">
                        <i class="icon-alarmclock size-6x"></i>
                        <i class="icon-alarmclock back-icon"></i>
                        <div class="feature-left-content">
                                <h4 class="bold">Livraison à temps</h4>
                                <p class="pt10">
                                    Grâce a Nos pratique agiles,nos services sont rapides,et le suivi possible avec garantie de livraison à temps.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
<!-- End Features -->

<!-- service -->
<section class="bg-img-11 ">
            <div class="container pt80 pb100 ">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="bold dark">Nos département</h3>
                        <hr class="separator">
                        <p class="lead-3 dark">Nous offrons un éventail complet de services pour aider les entreprises à mieux fonctionner.</p>
                    </div>
                </div>
            </div>
            <div class="container mb60">
                <div class="row">
                    <div class="portfolio-no-gutter-fullwidth cbp" id="js-masonry-fullwidth" >
                            @foreach($services as $service)
                            <div class="cbp-item">
                                <a href="{{route('service.category',$service->slug)}}" class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{asset('storage/'.$service->full_image)}}" alt="{{$service->name}}-image">
                                    </div>
                                    <div class="cbp-caption-activeWrap" style="background: linear-gradient(to right, {{$service->color_gradiant_1}}, {{$service->color_gradiant_2}});">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-title">
                                                    <img src="{{asset('img/assets/Ruya-Branding-Logo-white.png')}}" width="65" alt="logo">
                                                </div>
                                                <div class="cbp-l-caption-title pt30">{{$service->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h4 class="text-center pt20 bold">- {{$service->name}} -</h4>
                            </div>

                            @endforeach
                    </div>

                </div>
            </div>

            <div class="container pt80 pb80">
                <div class="row">
                    <div class="col-sm-8 mr-auto text-center pb30">
                        <h3 class="bold dark">Nos réalisations</h3>
                        <hr class="separator">
                        <p class="lead-3 dark">Découvrez nos plus belles réalisations ainsi que de nombreux projets dans lesquels Ruya Studio s'est impliqué.</p>
                    </div>
                    <div class="container">
                        <div class="portfolio-grid-boxed cbp" id="js-grid">
                            @foreach($portfolio as $item)
                                <div class="cbp-item">
                                    @if(!empty($item->video_link))
                                        <a href="{{$item->video_link}}" class="cbp-lightbox cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="{{asset('storage/'.$item->image)}}">
                                            </div>
                                            <div class="cbp-caption-activeWrap" >
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">
                                                            <i class="ion-ios-play size-4x"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @else
                                            <a href="{{asset('storage/'.$item->image)}}" class="cbp-lightbox cbp-caption">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img src="{{asset('storage/'.$item->image)}}">
                                                </div>
                                                <div class="cbp-caption-activeWrap" >
                                                    <div class="cbp-l-caption-alignCenter">
                                                        <div class="cbp-l-caption-body">
                                                            <div class="cbp-l-caption-title">
                                                                <i class="ion-ios-play size-4x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                    @endif

                                </div>
                            @endforeach
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
                                <h2>Ce que disent Sur nous </h2>
                                <hr class="separator">
                                <h4>This guys are amazing! They were so quick to respond and let me tell you, they are all knowing! I highly<br />recommend their themes! They are all about making their clients happy!</h4>
                                <h5 class="subheading">Jack Westbrook</h5>
                                <p>Web Developer</p>
                            </div>

                            <div>
                                <h2>Ce que disent Sur nous </h2>
                                <hr class="separator">
                                <h4>This guys are amazing! They were so quick to respond and let me tell you, they are all knowing! I highly<br />recommend their themes! They are all about making their clients happy!</h4>
                                <h5 class="subheading">Jack Westbrook</h5>
                                <p>Web Developer</p>
                            </div>

                            <div>
                                <h2>Ce que disent Sur nous </h2>
                                <hr class="separator">
                                <h4>This guys are amazing! They were so quick to respond and let me tell you, they are all knowing! I highly<br />recommend their themes! They are all about making their clients happy!</h4>
                                <h5 class="subheading">Jack Westbrook</h5>
                                <p>Web Developer</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- End Testimonials -->

<!-- partners Section -->
        <section class="pt60 pb60 bg-img-13">
            <div class="container text-center">
                <h3 class="bold dark">Nos partenaire </h3>
                <hr class="separator">
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
