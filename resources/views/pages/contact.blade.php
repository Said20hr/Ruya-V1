@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'portfolio')
</head>
<body>
@section('content')
        <!-- Page Hero -->
        <section class="page-title parallax overlay bg-img-1">
            <div class="page-title-content">
                <div class="container">
                    <div class="col-sm-12 text-center white">
                        <h1>Let' Get in Touch</h1>
                        <hr class="separator">
                        <h5 class="subheading">Try for free - Start paying when you’re ready.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Hero -->

        <!-- Start Contact Form Section -->
        <section class="pt100 pb90">
            <div class="container">
                <div class="row">

                    <div class="contact col-md-9">
                        <div id="message"></div>
                        <!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
                        <form method="post" action="php/contact-form.php" name="contactform" id="contactform">
                            <fieldset><input name="name" type="text" id="name" placeholder="Your Name*"/></fieldset>
                            <fieldset><input name="email" type="text" id="email" placeholder="Your Email*"/></fieldset>
                            <input name="subject" type="text" id="subject" placeholder="Subject"/>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Description*"></textarea>
                            <input type="submit" class="submit btn btn-md btn-primary" id="submit" value="Send Message" />
                        </form>
                    </div>

                    <div class="col-md-3 contact-side">
                        <div class="side-info">
                            <h5>We’d love to talk to you!</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mattis porttitor turpis, at convallis eros ultricie.</p>
                        </div>
                        <div class="side-info">
                            <h5>Reach out today!</h5>
                            <p>
                                124 Central West, Manhattan, NY
                                <br>
                                (001) 965 4688
                                <br>
                                <a href="#">hello@vossendesign.com</a>
                            </p>
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

                </div>
            </div>
        </section>
        <!-- End Contact Form Section -->

        <!-- Google Map -->
        <section
             data-map-coordinates="40.776773, -73.981351"
             data-marker-coordinates="40.775075, -73.981179"
             data-info="Come visit us today!<br>4th West St, New York"
             id="map" class="map-style-1 height500">
        </section>
        <!-- End Google Map -->

@endsection
</body>
</html>
