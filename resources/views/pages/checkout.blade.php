@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Checkout')
</head>
<body>
@section('content')

    <!-- hero page -->
    <section class="pt40 pb40  parallax  overlay bg-img-1">
        <div class="hero-container container">
            <div class="col-sm-12 mr-auto text-center">
                <h3 class="large white-until-load mt20 white"><span class="bold">Checkout</span></h3>
                <hr class="separator">
            </div>
        </div>
    </section>
    <!-- End hero page-->
    <!-- Checkout -->
        <section class="checkout">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 mr-auto text-center mt40 mb40">
                        <div class="section-heading">
                            <h2>Billing Details</h2>
                            <hr class="separator">
                        </div>
                        <div class="half-left col-sm-6">
                            <input type="text" class="input-text" name="billing_first_name" placeholder="First Name">
                        </div>
                        <div class="half-right col-sm-6">
                            <input type="text" class="input-text" name="billing_last_name" placeholder="Last Name">
                        </div>
                        <input type="text" class="input-text" name="billing_email" placeholder="Email Address">
                        <input type="text" class="input-text" name="billing_address" placeholder="Street Address">
                        <input type="text" class="input-text" name="billing_apt" placeholder="Apartment, suite, unit etc.">
                        <div class="half-left col-sm-6">
                            <input type="text" class="input-text" name="billing_city" placeholder="City">
                        </div>
                        <div class="half-right col-sm-6">
                            <input type="text" class="input-text" name="billing_post" placeholder="Postcode">
                        </div>
                        <input type="text" class="input-text" name="billing_phone" placeholder="Phone">
                    </div>

                    <div class="col-md-4 mr-auto">
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
                        <a href="#" class="btn btn-primary btn-md btn-appear btn-cart-checkout"><span>Submit Order <i class="ion-ios-arrow-forward"></i></span></a>
                        <p class="small-print">By clicking 'Place your order', you agree to the <a href="#" class="highlight">Terms &amp;<br>Conditions</a></p>
                        <a href="shop-4columns.html" class="highlight pull-right mt20"><i class="ion-android-arrow-back"></i> Back to Cart</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Checkout -->
        @endsection
    </body>
</html>

