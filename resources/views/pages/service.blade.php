@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Services')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')



<!-- Page Hero -->
<section class="hero-fullwidth bg-img-8  overlay">
    <div class="hero-container container">
        <div class="hero-content text-center">

            <div class="col-sm-12 mr-auto text-center">
                <h3 class="large white bold">Présentez votre application de manière réussie avec Ruya</h3>
                <hr class="separator hidden-xs">
            </div>

        </div>
    </div>
</section>
<!-- End Page Hero -->

<!-- Portfolio -->
<section class="bg-img-11 pb120">
    <div class="container">
        <div class="row" style="margin-top:-10vh">
            <div class="app-gallery cbp" id="js-grid-slider">
                @foreach($services as $service)
                    <div class="cbp-item">
                    <a href="{{route('service.category',$service->slug)}}" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{asset('storage/'.$service->full_image)}}" alt="#">
                        </div>
                        <div class="cbp-caption-activeWrap" style="background: linear-gradient(to right, {{$service->color_gradiant_1}}, {{$service->color_gradiant_2}});">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">
                                        <img src="{{asset('img/assets/Ruya-Branding-Logo-white.png')}}" width="30" alt="logo">
                                    </div>
                                    <div class="cbp-l-caption-title pt30">{{$service->name}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container mt50 pt140">
        <div class="col-md-12 section-heading ">
            <h2>Pourquoi choisiriez-vous Ruya Studio ? </h2>
            <hr class="separator">
            <p class="lead dark">
                Si vous avez besoin de l'un de nos services et solutions, pourquoi choisiriez-vous Ruya pour booster votre activité? </p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 feature-center">
                <i class="icon-target size-5x color"></i>
                <i class="icon-target back-icon"></i>
                <div class="feature-center">
                    <h4 class="dark bold">Objectives</h4>
                    <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                        to provide our partners with development solutions for their business,
                        and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <i class="icon-telescope size-5x color"></i>
                <i class="icon-telescope back-icon"></i>
                <div class="feature-center">
                    <h4 class="dark bold">Vision</h4>
                    <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                        to provide our partners with development solutions for their business,
                        and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <i class="icon-streetsign size-5x color"></i>
                <i class="icon-streetsign back-icon"></i>
                <div class="feature-center">
                    <h4 class="dark bold">Teamwork</h4>
                    <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                        to provide our partners with development solutions for their business,
                        and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <i class="icon-genius size-5x color"></i>
                <i class="icon-genius back-icon"></i>
                <div class="feature-center">
                    <h4 class="dark bold">Customers</h4>
                    <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                        to provide our partners with development solutions for their business,
                        and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <i class="icon-genius size-5x color"></i>
                <i class="icon- back-icon"></i>
                <div class="feature-center">
                    <h4 class="dark bold">Quality</h4>
                    <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                        to provide our partners with development solutions for their business,
                        and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 feature-center">
                <i class="icon-genius size-5x color"></i>
                <i class="icon-genius back-icon"></i>
                <div class="feature-center">
                    <h4 class="dark bold">Management</h4>
                    <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                        to provide our partners with development solutions for their business,
                        and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
</body>
</html>

