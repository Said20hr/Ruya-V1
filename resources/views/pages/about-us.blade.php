@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'A propos')
    <link rel="icon" href="{{ URL::asset('eye-only.svg') }}" type="image/x-icon"/>
</head>
<body>
@section('content')


    <section class="hero-fullscreen hero-video overlay-2">

        <video youtube-video-id="AGIqhnuU5YM" id="vossen-youtube"></video>

        <div class="hero-container">
            <div class="hero-content text-center">
                <a href="#features" class="scroll-btn "><i class="ion-chevron-down size-4x"></i></a>
            </div>
        </div>

    </section>

    @foreach($abouts as $about)
    <!-- About -->
    <section class="bg-white pb120 pt140" id="features">
        <div class="container pb80">

            <div class="d-flex vertical-align justify-content-between">

                <div class="col-md-7 text-left ">
                    <h2 class="pl30 pr30   dark">{{$about->title_1}}</h2>
                        <div class="pl30 pr30 box">
                            <div class="lead-3">{!! $about->description_1 !!}</div>
                        </div>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('img/app/team.gif')}}" alt="" class="" width="450">
                </div>

            </div>
        </div>
    </section>
    <!-- End About -->
    @endforeach



</section>

      <!--TEAM-->
     {{--- <section class="bg-dark-1 white">
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
      </section>--}}
      <!-- End Team -->
    <!-- How -->
    <section class="pt60 pb80 bg-img-11">
        <div class="container">
            <div class="col-md-12 section-heading ">
                <h3 class="bold dark">Nos valeurs </h3>
                <hr class="separator">
                <p class="lead-3 dark">Ce qui nous rendre plus forts, Nous sommes dévoués à votre succès! </p>

            </div>
            <div class="row text-center">
                    <div class="col-md-4 col-sm-4 feature-left">
                        <i class="icon-target size-4x color"></i>
                        <i class="icon-target back-icon"></i>
                        <div class="feature-left-content">
                        <h4 class="dark bold">Objectives</h4>
                        <p>Notre équipe travaille dur et intelligemment pour présenter le meilleur du e-marketing et des technologies dans le monde,
                            apporter à nos partenaires des solutions de développement pour leur activité.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 feature-left">
                        <i class="icon-telescope size-4x color"></i>
                        <i class="icon-telescope back-icon"></i>
                        <div class="feature-left-content">
                        <h4 class="dark bold">Vision</h4>
                        <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                            to provide our partners with development solutions for their business,
                            and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 feature-left">
                        <i class="icon-streetsign size-4x color"></i>
                        <i class="icon-streetsign back-icon"></i>
                        <div class="feature-left-content">
                        <h4 class="dark bold">Teamwork</h4>
                        <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                            to provide our partners with development solutions for their business,
                            and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 feature-left">
                        <i class="icon-genius size-4x color"></i>
                        <i class="icon-genius back-icon"></i>
                        <div class="feature-left-content">
                        <h4 class="dark bold">Customers</h4>
                        <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                            to provide our partners with development solutions for their business,
                            and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                        </div>
                    </div>
                <div class="col-md-4 col-sm-4 feature-left">
                    <i class="icon-genius size-4x color"></i>
                    <i class="icon- back-icon"></i>
                    <div class="feature-left-content">
                        <h4 class="dark bold">Quality</h4>
                        <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                            to provide our partners with development solutions for their business,
                            and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 feature-left">
                    <i class="icon-genius size-4x color"></i>
                    <i class="icon-genius back-icon"></i>
                    <div class="feature-left-content">
                        <h4 class="dark bold">Management</h4>
                        <p>Our team works hard & smart to present the best of e-marketing and technologies in the world,
                            to provide our partners with development solutions for their business,
                            and to enrich technologies of Arab world, where Muzawed aims to reach leadership of MENA market.</p>
                    </div>
                </div>
                </div>

            </div>
    </section>
    <!-- End How -->


@endsection
</body>
</html>
