@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'portfolio')
</head>
<body>
@section('content')

    <section class="hero-fullwidth parallax  overlay bg-img-1">
    <div class="hero-container container">
        <div class="hero-content text-center">

            <div class="col-sm-12 mr-auto text-center pt20">
                <h1 class="large white-until-load mt20 white"><span class="bold">Portfolio</span></h1>
                <h5 class="subheading white-until-load mt20 mb30 hidden-xs white">Ruya studio agence reactive</h5>
                <hr class="separator">
            </div>
        </div>
    </div>
</section>
    <!-- Portfolio -->
    <section class="portfolio bg-grey-2">
    <div class="container pt40 pb100">
        <div class="row">
            <div class="portfolio-filters-center cbp-l-filters-button" id="js-filters">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    All
                </div>
                <div data-filter=".branding" class="cbp-filter-item">
                    Branding
                </div>
                <div data-filter=".web-design" class="cbp-filter-item">
                    Web Design
                </div>
                <div data-filter=".print" class="cbp-filter-item">
                    Print
                </div>
                <div data-filter=".graphic" class="cbp-filter-item">
                    Graphic
                </div>
            </div>

            <div class="portfolio-grid-fullwidth cbp" id="js-grid">

                <div class="cbp-item print branding">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/1.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Rewind Watch App</div>
                                    <div class="cbp-l-caption-desc">Branding, Graphic</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design graphic">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/2.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Experience Pad UI</div>
                                    <div class="cbp-l-caption-desc">Web-design, Graphic</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item print branding">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/3.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">PlayIt Disk Cover</div>
                                    <div class="cbp-l-caption-desc">Print, Branding</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item print branding">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/4.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Sketching Fun</div>
                                    <div class="cbp-l-caption-desc">Print, Branding</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item print graphic">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/5.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Fabric Bag</div>
                                    <div class="cbp-l-caption-desc">Print, Graphic</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design branding">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/6.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Wander Interface</div>
                                    <div class="cbp-l-caption-desc">Web Design, Graphic</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="cbp-item web-design graphic">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/7.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Floating Apps</div>
                                    <div class="cbp-l-caption-desc">Web Design, Graphic</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item print branding">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/8.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">Deer Wildfile</div>
                                    <div class="cbp-l-caption-desc">Print, Branding</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web-design graphic">
                    <a href="portfolio-project-carousel.html" class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="img/portfolio/grid/9.jpg">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">WhereTo App</div>
                                    <div class="cbp-l-caption-desc">Web Design, Graphic</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
    <!-- End Portfolio -->



@endsection
</body>
</html>
