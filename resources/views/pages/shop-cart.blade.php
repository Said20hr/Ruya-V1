@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'panier')
</head>
<body>
@section('content')



    <!-- hero page -->
    <section class="pt40 pb40  parallax  overlay bg-img-1">
        <div class="hero-container container">
            <div class="col-sm-12 mr-auto text-center">
                    <h3 class="large white-until-load mt20 white"><span class="bold">Votre Panier</span></h3>
                    <hr class="separator">
            </div>
        </div>
    </section>
    <!-- End hero page-->
    <!-- Cart -->
    <section class="cart">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 cart-total-items">
                        <h5 class="subheading">2 items</h5>
                    </div>

                    <div class="col-md-8">

                        <div class="cart-item">
                            <div class="item-image-container">
                                <a href="#"><img src="img/shop/5.jpg" class="img-responsive" alt="#"></a>
                            </div>
                            <div class="item-details">
                                <h6><strong>C&amp;A Inc</strong></h6>
                                <h5>Sparrow Ankle Pants</h5>
                                <p>$49.95</p>
                                <a href="#" class="item-action move-to-wishlist"><i class="ion-android-favorite-outline"></i> Move to wishlist</a>
                                <a href="#" class="item-action remove-from-cart"><i class="ion-ios-trash-outline"></i> Remove</a>
                                <div class="quantity-size">
                                    <div class="selection">
                                        <label>Size</label>
                                        <span>
                                            <select>
                                                <option label="XS" value="number:1" selected="selected">XS</option>
                                                <option label="S" value="number:2">S</option>
                                                <option label="M" value="number:3">M</option>
                                                <option label="L" value="number:4">L</option>
                                                <option label="XL" value="number:5">XL</option>
                                                <option label="XXL" value="number:5">XXL</option>
                                                <option label="3XL" value="number:5">3XL</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="selection">
                                        <label>Quantity</label>
                                        <span>
                                            <select>
                                                <option label="1" value="number:1" selected="selected">1</option>
                                                <option label="2" value="number:2">2</option>
                                                <option label="3" value="number:3">3</option>
                                                <option label="4" value="number:4">4</option>
                                                <option label="5" value="number:5">5</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-item">
                            <div class="item-image-container">
                                <a href="#"><img src="img/shop/3.jpg" class="img-responsive" alt="#"></a>
                            </div>
                            <div class="item-details">
                                <h6><strong>C&amp;A Inc</strong></h6>
                                <h5>Jacquelyn Sleeve Top</h5>
                                <p>$49.95</p>
                                <a href="#" class="item-action move-to-wishlist"><i class="ion-android-favorite-outline"></i> Move to wishlist</a>
                                <a href="#" class="item-action remove-from-cart"><i class="ion-ios-trash-outline"></i> Remove</a>
                                <div class="quantity-size">
                                    <div class="selection">
                                        <label>Size</label>
                                        <span>
                                            <select>
                                                <option label="XS" value="number:1" selected="selected">XS</option>
                                                <option label="S" value="number:2">S</option>
                                                <option label="M" value="number:3">M</option>
                                                <option label="L" value="number:4">L</option>
                                                <option label="XL" value="number:5">XL</option>
                                                <option label="XXL" value="number:5">XXL</option>
                                                <option label="3XL" value="number:5">3XL</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="selection">
                                        <label>Quantity</label>
                                        <span>
                                            <select>
                                                <option label="1" value="number:1" selected="selected">1</option>
                                                <option label="2" value="number:2">2</option>
                                                <option label="3" value="number:3">3</option>
                                                <option label="4" value="number:4">4</option>
                                                <option label="5" value="number:5">5</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="cart_totals">
                            <h5>Your Order</h5>
                            <table cellspacing="0">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>2 Items</th>
                                        <td><span class="amount">$131</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Delivery</th>
                                        <td><span>$7.99</span></td>
                                    </tr>
                                    <tr class="cart-returns">
                                        <th>Returns</th>
                                        <td><span class="amount">Free for 90 days</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="amount">$138.99</span></strong> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-appear btn-cart-checkout"><span>Place Your Order <i class="ion-ios-arrow-forward"></i></span></a>
                        <p class="small-print">By clicking 'Place your order', you agree to the <a href="#" class="highlight">Terms &amp;<br>Conditions</a></p>
                        <a href="shop-4columns.html" class="highlight pull-right mt20"><i class="ion-android-arrow-back"></i> Continue Shopping</a>
                    </div>

                </div>
            </div>
        </section>
    <!-- Cart -->

@endsection
</body>
</html>
