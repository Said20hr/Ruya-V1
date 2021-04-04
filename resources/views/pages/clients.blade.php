@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'portfolio')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')

    <section class="hero-fullwidth  overlay bg-img-1" style="background-image: url({{asset('img/backgrounds/02.png')}});background-size: 100%;">
    <div class="hero-container container">
        <div class="hero-content text-center">

            <div class="col-sm-12 mr-auto text-center">
                <h1 class="large white-until-load mt20 white"><span class="bold">Portfolio</span></h1>
                <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">Ruya studio agence Creative</h5>
                <hr class="separator">
            </div>
        </div>
    </div>
</section>
    <!-- Portfolio -->
    <section class="portfolio bg-grey-2">
    <div class="container pb20">
        <div class="row">
            <div class="portfolio-filters-center cbp-l-filters-button" id="js-filters">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    Tous
                </div>
                @foreach($services as $service)
                <div data-filter=".{{$service->slug}}" class="cbp-filter-item">
                   {{$service->name}}
                </div>
                @endforeach

            </div>

            <div class="portfolio-grid-fullwidth cbp" id="js-grid">
               @foreach($portoflios as $portfolio)
                    @foreach($portfolio->services as $service)
                        @if(empty($portfolio))
                            NO Portfolio added for now...
                        @else
                        <div class="cbp-item print {{$service->slug}}" >
                            @if(!empty($portfolio->video_link))
                                <a href="{{$portfolio->video_link}}" class="cbp-lightbox cbp-caption">
                                    @else
                                        <a href="{{asset('storage/'.$portfolio->image)}}" class="cbp-lightbox cbp-caption">
                                            @endif
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset('storage/'.$portfolio->image)}}">
                                </div>
                                <div class="cbp-caption-activeWrap" style="background: linear-gradient(to right, {{$service->color_gradiant_1}}, {{$service->color_gradiant_2}});">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">{{$portfolio->title}}</div>
                                            <div class="cbp-l-caption-desc">{{$service->name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>
</section>
    <!-- End Portfolio -->



@endsection
</body>
</html>
