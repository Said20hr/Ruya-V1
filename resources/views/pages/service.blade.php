@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Services')
</head>
<body>
@section('content')



<!-- Page Hero -->
<section class="hero-fullscreen parallax bg-app-1">
    <div class="hero-container container">
        <div class="hero-content text-center">

            <div class="col-sm-11 mr-auto text-center">
                <h1 class="large white">Present your app in successful way with Ruya.</h1>
                <hr class="separator hidden-xs">
                <h5 class="subheading white hidden-xs">Check now our services</h5>
            </div>

        </div>
    </div>
</section>
<!-- End Page Hero -->

<!-- Portfolio -->
<section class="pb140">
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
</section>
<!-- End Portfolio -->


@endsection
</body>
</html>

