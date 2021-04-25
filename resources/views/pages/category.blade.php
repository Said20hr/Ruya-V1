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
                        <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">{{$service->sub_title}}</h5>
                        <hr class="separator">
                    </div>
                </div>
            </div>
        </section>
<!-- End hero page-->
<!-- Description -->
    <section class="bg-white ">
        <div class="container pt80">
            <div class="mr-auto text-center col-sm-10">
                <h3 class="dark bold">
                    Why Using Video & Motion Graphic for your Business?
                </h3>
                <p class="lead-3 col-md-9 mr-auto pt10">
                    Attract more customers to your company. Ruya motion provides you with game changing services, from video shooting to motion graphics designs.
                </p>
            </div>
            <div class="pt10 pb10">
                <div class="row">
                    <div class="col-md-3 text-left pr20 mt50 mb50">
                        @if($details)
                        @foreach ((array)json_decode($details->details) as $property)
                            @if(count((array)json_decode($details->details))/2 > $loop->index )
                        <div class="text-right">
                            <h4 class="bold dark ">{{ $property->title }}</h4>
                            <div class="lead pr10 ">
                                {{ $property->description }}
                            </div>
                        </div>
                            @endif
                        @endforeach
                        @endif
                    </div>

                <div class="col-md-6 mt60 mb50">
                    <div class="video-container">
                        <iframe src="//player.vimeo.com/video/115919099?color=e73332&title=0&amp;byline=0&amp;portrait=0" width="460"
                                height="265" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-3 text-left pr20 mt50 mb50">
                    @if($details)
                    @foreach ((array)json_decode($details->details) as $property)
                        @if(count((array)json_decode($details->details))/2 <= $loop->index )
                            <div class="text-left">
                                <h4 class="bold dark ">{{ $property->title }}</h4>
                                <div class="lead pr10 ">
                                    {{ $property->description }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @endif
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class=" bg-grey-2">
        <div class="container pt20 pb20">
            <div class="row text-center">
                @if($details)
                @foreach ((array)json_decode($details->features) as $property)
                    <div class="col-md-4 col-sm-4 feature-left">
                        <i class="ion-android-checkmark-circle size-2x color"></i>
                        <div class="feature-left">
                            <h4 class="bold dark">{{$property->title}}</h4>
                            <p class="dark">{{$property->description}}</p>
                        </div>
                    </div>
                @endforeach
                @endif
                </div>
        </div>


    </section>
<!-- end Description -->
    <!-- packs -->
    <section class="pt60 pb80 bg-white" id="packs">
        <div class="container text-center ">
            <div class="col-md-11 mr-auto pb20">
            <h3 class="uppercase bold dark ">Nos packs</h3>
            <p class="lead-3 dark text-center">The info below allows you to compare the packages. Choose which one suits best your business goals and targeted audience.
                We guarantee to start video shooting process as soon as we sign the contract and brief all details.
            </p>
            </div>
        </div>
        <div class="container pt10 pb20">
            <div class="pt30 pb30">
                <div class="bg-grey-2" style="border-radius: 4px">
                    <div class="row ">
                        <div class="col-md-6 pt30 pb25 pl40 pr40">
                            <h3 class="dark bold pt0 mt0">Simple</h3>
                            <p class="lead-2 dark pl10">It includes creating simple visuals, English voiceover, and stock music</p>
                            <ul class="list-icons list-group-item-text pl10 details" >
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Effective Content</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Voice Over</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>High Quality</li>
                            </ul>
                            <div class="d-flex pt15 pb15 pl0 block-sm">
                                <button class="btn btn-lg btn-primary pb20 bold lead-3">Commander le pack <i class="ion ion-ios-cart size-1x"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 pt30 pb30 pl30 pr30 vertical-align">
                            <div class="row justify-content-center text-center container ">
                                <div class="col-md-6 pb10 pt10">
                                    <img src="{{asset('img/app/animated2.gif')}}" alt="" width="275" height="225" style="border-radius: 5px">
                                </div>
                                <div class="col-md-6  pb10 pt10">
                                    <img src="{{asset('img/app/animated1.gif')}}" alt="" width="275" height="225" style="border-radius: 5px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt30 pb30">
                <div class="bg-grey-2" style="border-radius: 4px">
                    <div class="row">
                        <div class="col-md-6 pt30 pb25 pl40 pr40">
                            <h3 class="dark bold pt0 mt0">Standard</h3>
                            <p class="lead-2 dark pl10">It includes creating simple visuals, English voiceover, and stock music</p>
                            <ul class="list-icons list-group-item-text pl10 details" >
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Effective Content</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Voice Over</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>High Quality</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Coloring Touch</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> Creative Sketch</li>
                            </ul>
                            <div class="d-flex pt15 pb15 pl0 block-sm">
                                <button class="btn btn-lg btn-primary pb20 bold">Commander le pack <i class="ion ion-ios-cart size-1x"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 pt30 pb30 pl30 pr30 vertical-align">
                            <div class="row justify-content-center text-center container ">
                                <div class="col-md-6 pb10 pt10">
                                    <img src="{{asset('img/app/animated1.gif')}}" alt="" width="275" height="225" style="border-radius: 5px">
                                </div>
                                <div class="col-md-6  pb10 pt10">
                                    <img src="{{asset('img/app/animated3.gif')}}" alt="" width="275" height="225" style="border-radius: 5px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt30 pb30">
                <div class="bg-grey-2" style="border-radius: 4px">
                    <div class="row">
                        <div class="col-md-6 pt30 pb25 pl40 pr40">
                            <h3 class="dark bold pt0 mt0">Avancé</h3>
                            <p class="lead-2 dark pl10">It includes creating simple visuals, English voiceover, and stock music</p>
                            <ul class="list-icons list-group-item-text pl10 details" >
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Effective Content</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Voice Over</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>High Quality</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Coloring Touch</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i> Creative Sketch</li>
                                <li class="lead-4 dark pb10"><i class="ion-checkmark-circled color"></i>Smooth Move</li>
                            </ul>
                            <div class="d-flex pt15 pb15 pl0 block-sm">
                                <button class="btn btn-lg btn-primary pb20 bold">Commander le pack <i class="ion ion-ios-cart size-1x"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 pt30 pb30 pl30 pr30 vertical-align">
                            <div class="row justify-content-center text-center container ">
                                <div class="col-md-6 pb10 pt10">
                                    <img src="{{asset('img/app/animated2.gif')}}" alt="" width="275" height="225" style="border-radius: 5px">
                                </div>
                                <div class="col-md-6  pb10 pt10">
                                    <img src="{{asset('img/app/animated3.gif')}}" alt="" width="275" height="225" style="border-radius: 5px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="col-md-11 mr-auto pt20 pb30">
                <h3 class="bold dark ">Ou demander un devis </h3>
                <p class="lead-3 text-center dark">So excited to connect with you through this form or contact us directly<br>
                <a href="tel:+0697883500" class="dark bold">0697883500</a> Ou <a href="tel:+0697883500" class="dark bold">0697883500</a></p>
            </div>
            <div class="col-md-9 mr-auto bg-grey bor3" style="border-radius: 8px">
                <div class="pt60 pb30 pl20 pr20">
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
                                <select id="name" type="text" name="phone" class="selection">
                                    <option value="">Le service que vous voulez demander</option>
                                    @foreach($services as $service)
                                    <option value="{{$service->name}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row text-left">
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
        </div>



    </section>





    <section class="pt80 pb80 bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mr-auto text-center pb30">
                    <h3 class="dark bold">Works Samples By {{$service->name}}</h3>
                    <hr class="separator">
                    <p class="lead">Made with Passion !</p>
                </div>
                <div class="container">
                    <div class="portfolio-grid-boxed cbp" id="js-grid">
                        @foreach($portfolios as $item)
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
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title"><i class="ion-ios-play"></i></div>
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
            <div class="text-center">
                <a href="{{route('portfolio')}}" class="btn btn-lg btn-primary lead-3 pl60 pr60" v-show="true" id="wrapper">Voir plus <i class="ion ion-chevron-right ml10"></i></a>
            </div>
        </div>
    </section>
    <!-- End Slide -->
<!-- packs -->

<!-- End Slide -->



@endsection
</body>
</html>
