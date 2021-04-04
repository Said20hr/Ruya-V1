@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'A propos')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')


    <section class="hero-fullwidth  overlay" style="background-image: url({{asset('img/backgrounds/05.png')}});background-size: 100%;">
        <div class="hero-container container">
            <div class="hero-content text-center">
                <div class="col-sm-12 mr-auto text-center">
                    <h1 class="large white-until-load mt20 white"><span class="bold">A propos de nous</span></h1>
                    <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">Ruya studio Agence Creative</h5>
                    <hr class="separator">
                </div>
            </div>
        </div>
    </section>

    @foreach($abouts as $about)
    <!-- About -->
    <section class="bg-grey-1">
        <div class="container pt60 pb60">
            <div class="vertical-align">
                <div class="col-md-6 text-left mt20 mb20">
                    <h2>{{$about->title_1}}</h2>
                    <p>{!! $about->description_1 !!}</p>
                </div>

                <div class="col-md-6 mt20 mb20">
                    <div class="video-container">
                 <iframe src="http://player.vimeo.com/video/{{$about->link_video}}?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
{{--                        <iframe src='{{$about->link_video}}' frameborder='0' allowfullscreen></iframe>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About -->


      <!-- Skills -->
      <section class="bg-white">
          <div class="container pt60 pb60">
              <div class="row-flex-center">
                      <div class="row">
                          <div class="col-lg-6">
                                  <div class="slider-block-1 owl-carousel navigation-thin ">
                                       @foreach((array)json_decode($about->images,true) as $image)
                                      <img src="{{asset('storage/'.$image)}}" class="img-responsive mr-auto">
                                      @endforeach
                                  </div>
                          </div>
                          <div class="col-md-6 text-left  mt20 mb20">
                              <h2>{{$about->title_2}}</h2>
                              <p>{!! $about->description_2 !!}</p>
                          </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Skills -->
    @endforeach



      <!--TEAM-->
      <section class="bg-dark-1 white">
          <div class="container pt50 pb50">
              <div class="row">
                  <div class="col-md-12 section-heading">
                      <h2>Notre équipe</h2>
                      <hr class="separator">
                  </div>
                  <div class="container">
                  <div class="row event-speakers">
                      @foreach($team as $member)
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="{{asset('storage/'.$member->Image)}}" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              @if($member->facebook_link)
                                                  <li class="social-icon"><a href="{{$member->facebook_link}}" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                              @endif
                                              @if($member->Instagram_link)
                                                      <li class="social-icon"><a href="{{$member->Instagram_link}}" target="_blank"><i class="ion-social-instagram"></i></a></li>
                                                  @endif
                                                  @if($member->youtube_link)
                                              <li class="social-icon"><a href="{{$member->youtube_link}}" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                  @endif
                                                  @if($member->linkedin_link)
                                              <li class="social-icon"><a href="{{$member->linkedin_link}}" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                                  @endif
                                                  @if($member->twitter_link)
                                              <li class="social-icon"><a href="{{$member->twitter_link}}" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                  @endif
                                                  @if($member->dribble_link)
                                              <li class="social-icon"><a href="{{$member->dribble_link}}" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                                  @endif
                                                  @if($member->github_link)
                                              <li class="social-icon"><a href="{{$member->github_link}}" target="_blank"><i class="ion-social-github"></i></a></li>
                                                  @endif
                                                  @if($member->behance_link)
                                              <li class="social-icon"><a href="{{$member->behance_link}}" target="_blank"><i class="ion-social-wordpress"></i></a></li>
                                                  @endif
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4 class="pb10">{{$member->first_name." ".$member->last_name}}</h4>
                          <p>{{$member->job_title}}</p>
                      </div>
                      @endforeach

                  </div>
                  </div>

              </div>
          </div>
      </section>
      <!-- End Team -->
    <!-- How -->
    <section class="pt100 pb100 bg-grey">
        <div class="container">
            <div class="col-md-12 section-heading ">
                <h2>Ce que nous faisons</h2>
                <hr class="separator">
            </div>
            <div class="row text-center">
                    <div class="col-md-3 col-sm-4 feature-center">
                        <i class="icon-genius size-6x"></i>
                        <i class="icon-genius back-icon"></i>
                        <h5>Digital Marketing</h5>
                        <p>Lorem ipsum dolor sit amet, consctetuer adipising.</p>
                    </div>
                    <div class="col-md-3 col-sm-4 feature-center">
                        <i class="icon-telescope size-6x"></i>
                        <i class="icon-telescope back-icon"></i>
                        <h5>UX Strategy</h5>
                        <p>Lorem ipsum dolor sit amet, consctetuer adipising.</p>
                    </div>
                    <div class="col-md-3 col-sm-4 feature-center">
                        <i class="icon-streetsign size-6x"></i>
                        <i class="icon-streetsign back-icon"></i>
                        <h5>Story &amp; Content</h5>
                        <p>Lorem ipsum dolor sit amet, consctetuer adipising.</p>
                    </div>
                    <div class="col-md-3 col-sm-4 feature-center">
                        <i class="icon-genius size-6x"></i>
                        <i class="icon-genius back-icon"></i>
                        <h5>Digital Marketing</h5>
                        <p>Lorem ipsum dolor sit amet, consctetuer adipising.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End How -->


@endsection
</body>
</html>
