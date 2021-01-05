@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'A propos')
</head>
<body>
@section('content')


    <section class="hero-fullwidth parallax  overlay bg-img-1">
        <div class="hero-container container">
            <div class="hero-content text-center">

                <div class="col-sm-12 mr-auto text-center pt20">
                    <h1 class="large white-until-load mt20 white"><span class="bold">A propos de nous</span></h1>
                    <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">Ruya studio agence reactive</h5>
                    <hr class="separator">
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bg-grey-1">
        <div class="container pt80 pb40">
            <div class="vertical-align">

                <div class="col-md-6 text-left pr30 mt40 mb40">
                    <h2>Notre histoire</h2>
                    <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                    <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
                </div>

                <div class="col-md-6 mt50 mb50">
                    <div class="video-container">
                        <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About -->


      <!-- Skills -->
      <section class="pt40 pb80 bg-white">
          <div class="container-fluid">
              <div class="row-flex-center">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6">
                                  <div class="slider-block-1 owl-carousel navigation-thin ">
                                      <img src="img/portfolio/grid/4.jpg" class="img-responsive mr-auto">
                                      <img src="img/portfolio/grid/4.jpg" class="img-responsive mr-auto">
                                      <img src="img/portfolio/grid/4.jpg" class="img-responsive mr-auto">
                                  </div>
                          </div>
                          <div class="col-md-6 text-left pr30 mt40 mb40">
                              <h2>Notre mission</h2>
                              <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                              <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Skills -->




      <!--TEAM-->
      <section class="pt100 pb100 bg-dark-1 white">
          <div class="container pt20 pb20">
              <div class="row">
                  <div class="col-md-12 section-heading">
                      <h2>Notre équipe</h2>
                      <hr class="separator">
                  </div>
                  <div class="container">
                  <div class="row event-speakers">
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="img/team/1.jpg" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              <li class="social-icon"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-youtube"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4>John Westbrook</h4>
                          <p>Senior Web Developer</p>
                      </div>
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="img/team/2.jpg" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              <li class="social-icon"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-youtube"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4>Kelly Swanson</h4>
                          <p>Marketing Manager</p>
                      </div>
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="img/team/3.jpg" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              <li class="social-icon"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-youtube"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-dribbble"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4>Chris Holland</h4>
                          <p>Motion Graphics</p>
                      </div>
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="img/team/1.jpg" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              <li class="social-icon"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-youtube"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4>John Westbrook</h4>
                          <p>Senior Web Developer</p>
                      </div>
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="img/team/2.jpg" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              <li class="social-icon"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-youtube"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4>Kelly Swanson</h4>
                          <p>Marketing Manager</p>
                      </div>
                      <div class="col-lg-4 team">
                          <div class="team-container">
                              <div class="team-image">
                                  <img src="img/team/3.jpg" class="img-responsive" alt="" />
                              </div>
                              <div class="team-caption">
                                  <div>
                                      <div>
                                          <ul>
                                              <li class="social-icon"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-youtube"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-dribbble"></i></a></li>
                                              <li class="social-icon"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4>Chris Holland</h4>
                          <p>Motion Graphics</p>
                      </div>
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
