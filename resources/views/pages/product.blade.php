@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'packName')
</head>
<body>
@section('content')
    <!-- hero page -->
    <section class="pt40 pb40  parallax  overlay bg-img-1">
        <div class="hero-container container">
            <div class="col-sm-12 mr-auto text-center">
                <h3 class="large white-until-load mt20 white"><span class="bold">Packname</span></h3>
                <hr class="separator">
            </div>
        </div>
    </section>
    <!-- End hero page-->
    <!-- Shop Product -->
        <section class="shop-product">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 mt40 mb40">

                        <div class="shop-product-slider owl-carousel navigation-thin dark-pagination pagination-in">
                            <div><img src="img/shop/product-1.jpg" class="img-responsive width100" alt="#"></div>
                            <div><img src="img/shop/product-2.jpg" class="img-responsive width100" alt="#"></div>
                            <div><img src="img/shop/product-3.jpg" class="img-responsive width100" alt="#"></div>
                            <div><img src="img/shop/product-4.jpg" class="img-responsive width100" alt="#"></div>
                            <div><img src="img/shop/product-5.jpg" class="img-responsive width100" alt="#"></div>
                        </div>

                    </div>

                    <div class="col-sm-6 mt40 mb40 product-details">
                        <h2>The Over Shirt</h2>
                        <h4 class="price"><span class="currency">$</span>19.99<span class="old-price-single">26.95</span></h4>
                        <p>Short sleeve off white Tshirt made from pure cotton, featuring The Over Co. print on the chest, along with the Over logo label on the right hip side. Regular fit. Short sleeve off white Tshirt made from pure cotton, featuring The Over Co. print on the chest, along with the Over.</p>

                        <div class="quantity mb20 mt20">
                            <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                        </div>

                        <!-- Accordion Style 3 -->
                        <div class="panel-group accordian-style4" id="accordion">
                            <!-- First Panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     <button class="panel-title" data-toggle="collapse" data-target="#collapse41">
                                         Details, Size & Fit
                                     </button>
                                </div>
                                <div id="collapse41" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Our model is wearing size 26 jeans. She usually takes a Standard AU8 size, is 5’9 1/2” (177cm) tall and has a 58cm waist.</p>
                                        <p>- Length: Inside Leg: 71cm; Front Rise: 22cm; Leg Opening: 23cm</p>
                                        <p>- Super skinny; mid-rise waist </p>
                                        <p>- Cotton-blend, high-stretch denim</p>
                                        <p>- Crisp white wash; gold stitching</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Style 3 -->
                        <a href="#" class="btn btn-dark btn-lg btn-appear mt20"><span>Add To Cart <i class="ion-android-arrow-forward"></i></span></a>

                    </div>

                </div>
            </div>
        </section>
        <!-- End Shop Product -->

        <!-- Related Items -->
        <section class="shop shop-related">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="cbp" id="shop-grid">

                            <div class="cbp-item women clothing">
                            <div class="product-details">
                                <h4 class="price"><span class="currency">$</span>59.95<span class="old-price">69.99</span></h4>
                            </div>
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/shop/5.jpg">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="#" class="shop-item-btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="#" class="shop-item-btn add-to-cart-btn"><i class="fa fa-eye"></i> View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item women">
                            <div class="product-details">
                                <h4 class="price"><span class="currency">$</span>129.95<span class="old-price">160.95</span></h4>
                            </div>
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/shop/6.jpg">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="#" class="shop-item-btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="#" class="shop-item-btn add-to-cart-btn"><i class="fa fa-eye"></i> View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item clothing women">
                            <div class="product-details">
                                <h4 class="price"><span class="currency">$</span>74.95<span class="old-price">99.95</span></h4>
                            </div>
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/shop/7.jpg">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="#" class="shop-item-btn add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="#" class="shop-item-btn add-to-cart-btn"><i class="fa fa-eye"></i> View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Related Items -->

@endsection
</body>
</html>

