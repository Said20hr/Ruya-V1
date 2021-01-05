@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Blog')
</head>
<body>
@section('content')


    <section class="hero-fullwidth parallax  overlay bg-img-1">
        <div class="hero-container container">
            <div class="hero-content text-center">

                <div class="col-sm-12 mr-auto text-center pt20">
                    <h1 class="large white-until-load mt20 white"><span class="bold">Blog</span></h1>
                    <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">We Set You Apart To Grow Online Quickly</h5>
                    <hr class="separator">
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
        <section class="blog">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <ul class="blog-standard">

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Jan</h4>
                                        <h3 class="day">30</h3>
                                        <span class="year">2016</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <a href="blog-post-carousel.html"><img src="img/blog/1.jpg" class="img-responsive width100" alt="#"></a>
                                    <div class="post-text">
                                        <a class="link-to-post" href="blog-post-carousel.html"><h4>Awesome Standard Post</h4></a>
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Lifestyle</a>
                                            <span>,</span>
                                            <a href="#">Travel</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Dec</h4>
                                        <h3 class="day">24</h3>
                                        <span class="year">2015</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="image-slider1 owl-carousel navigation-thin pagination-in">
                                        <div><img src="img/blog/5.jpg" class="img-responsive width100" alt="#"></div>
                                        <div><img src="img/blog/3.jpg" class="img-responsive width100" alt="#"></div>
                                        <div><img src="img/blog/4.jpg" class="img-responsive width100" alt="#"></div>
                                    </div>
                                    <div class="post-text">
                                        <a class="link-to-post" href="blog-post-carousel.html"><h4>Carousel is Always Amazing</h4></a>
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Travel</a>
                                            <span>,</span>
                                            <a href="#">Wander</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Oct</h4>
                                        <h3 class="day">17</h3>
                                        <span class="year">2015</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-container">
                                        <iframe src='http://player.vimeo.com/video/157100757' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </div>
                                    <div class="post-text">
                                        <a class="link-to-post" href="blog-post-carousel.html"><h4>Awesome Video Post</h4></a>
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Travel</a>
                                            <span>,</span>
                                            <a href="#">Lifestyle</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Sep</h4>
                                        <h3 class="day">24</h3>
                                        <span class="year">2015</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <a href="blog-post-carousel.html"><h3>A flower does not think of competing with the flower next to it. It just blooms.</h3></a>
                                    <div class="post-text">
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Wander</a>
                                            <span>,</span>
                                            <a href="#">Lifestyle</a>
                                            <span>,</span>
                                            <a href="#">Travel</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                        </ul>

                        <!-- Pagination -->
                        <div class="col-md-12 text-center">
                            <ul class="blog-pagination">
                                <li>
                                    <a href="#">
                                        <i class="ion-android-arrow-back"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Pagination -->

                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-3 sidebar">

                        <div class="blog-widget">
                            <h5>About</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
                        </div>

                        <div class="blog-widget">
                            <h5>Categories</h5>
                            <ul class="category-list list-icons">
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Travel</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Lifestyle</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Wander</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Graphics</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Other Bits</a></li>
                            </ul>
                        </div>

                        <div class="blog-widget blog-tags">
                            <h5>Tags</h5>
                            <ul class="tags-list">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Apps</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                        </div>

                        <div class="blog-widget">
                            <h5>Archives</h5>
                            <ul class="category-list list-icons">
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>April 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>March 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>February 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>January 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>December 2015</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-share">
                            <ul class="list-inline">
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest-alt"></i></a></li>
                                <li><a href="#"><i class="ti-google"></i></a></li>
                            </ul>
                        </div>


                    </div>
                    <!-- End Sidebar -->

                </div>
            </div>
        </section>
        <!-- End Portfolio -->

    @endsection
    </body>
</html>

