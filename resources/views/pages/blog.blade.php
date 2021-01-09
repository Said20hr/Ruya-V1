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
        <div class="container-fluid">
            <div class="row">

                <div class="portfolio-filters-center cbp-l-filters-button" id="js-filters">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All
                    </div>
                    <div data-filter=".lifestyle" class="cbp-filter-item">
                        Lifestyle
                    </div>
                    <div data-filter=".travel" class="cbp-filter-item">
                        Travel
                    </div>
                    <div data-filter=".wander" class="cbp-filter-item">
                        Wander
                    </div>
                    <div data-filter=".other" class="cbp-filter-item">
                        Other Bits
                    </div>
                </div>

                <div class="blog-grid blog-columns cbp pb50 pt50" id="blog-grid">

                    <div class="cbp-item wander lifestyle">
                        <div class="post-date">
                            <h4 class="month">Apr</h4>
                            <h3 class="day">24</h3>
                            <span class="year">2016</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/1.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>Amazing Grid Post</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Lifestyle</a>
                                <span>,</span>
                                <a href="#">Travel</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item travel other">
                        <div class="post-date">
                            <h4 class="month">Mar</h4>
                            <h3 class="day">29</h3>
                            <span class="year">2016</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/2.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>The Incredible Side</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Travel</a>
                                <span>,</span>
                                <a href="#">Other</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item travel other">
                        <div class="post-date">
                            <h4 class="month">Feb</h4>
                            <h3 class="day">26</h3>
                            <span class="year">2016</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/3.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>Six Steps </h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Travel</a>
                                <span>,</span>
                                <a href="#">Lifestyle</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item wander lifestyle">
                        <div class="post-date">
                            <h4 class="month">Jan</h4>
                            <h3 class="day">30</h3>
                            <span class="year">2016</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/4.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>How to Take </h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Wander</a>
                                <span>,</span>
                                <a href="#">Lifestyle</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item wander lifestyle">
                        <div class="post-date">
                            <h4 class="month">Dec</h4>
                            <h3 class="day">25</h3>
                            <span class="year">2015</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/5.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>Is The Monster?</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Wander</a>
                                <span>,</span>
                                <a href="#">Lifestyle</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item wander other">
                        <div class="post-date">
                            <h4 class="month">Nov</h4>
                            <h3 class="day">30</h3>
                            <span class="year">2015</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/6.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>You Should Go</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Wander</a>
                                <span>,</span>
                                <a href="#">Other</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item travel lifestyle">
                        <div class="post-date">
                            <h4 class="month">Oct</h4>
                            <h3 class="day">29</h3>
                            <span class="year">2015</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/7.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>The Creative Edge</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Travel</a>
                                <span>,</span>
                                <a href="#">Lifestyle</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item travel other">
                        <div class="post-date">
                            <h4 class="month">Sep</h4>
                            <h3 class="day">27</h3>
                            <span class="year">2015</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/8.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>My Indsider's Guide</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Travel</a>
                                <span>,</span>
                                <a href="#">Other</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item travel">
                        <div class="post-date">
                            <h4 class="month">Aug</h4>
                            <h3 class="day">18</h3>
                            <span class="year">2015</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/9.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>Visiting Iceland</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Travel</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                    <div class="cbp-item travel">
                        <div class="post-date">
                            <h4 class="month">May</h4>
                            <h3 class="day">23</h3>
                            <span class="year">2015</span>
                        </div>
                        <a href="blog-post-carousel.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/blog/10.jpg">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="blog-thumb-desc">
                            <a class="link-to-post" href="blog-post-carousel.html"><h4>How to Get Around</h4></a>
                            <p class="blog-post-categories">
                                <span><i class="ion-ios-pricetags-outline"></i></span>
                                <a href="#">Travel</a>
                                <span>,</span>
                                <a href="#">Lifestyle</a>
                            </p>
                            <p class="excerpt">Curabitur quis faucibus odio, nec accumsan erat. Duis id ante convallis magna mattis pulvinar eu ut ipsum. Donec at leo id tortor mattis tempus...</p>
                            <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Portfolio -->
    @endsection
    </body>
</html>

