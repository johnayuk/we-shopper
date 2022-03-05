@extends('layouts.eShop')


@section('title')
Wishlist| E-Shopper
@endsection

@section('content')
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row contacth2">
            <div class="col-sm-12">
                <h2 class="title text-center">Contact <strong>US</strong></h2>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form contacth2">
                    <h2 class="title text-center">Get In Touch</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 contacth2">
                <div class="contact-info">
                    <h2 class="title text-center">Contact Info</h2>
                    <address>
                        <h4>E-Shopper Inc.</h4>
                        <h4> Oron Road</h4>
                        <h4> NIGERIA</h4>
                        <h4> Mobile: +2346 8122 712</h4>
                        <h4> Fax: 1-714-252-0026</h4>
                        <h4> Email: john517hpaul@gmail.com</h4>
                    </address>
                    <div class="social-networks contacth2">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#contact-page-->



<footer id="footer"><!--Footer-->


    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="">

                        <ul class="footerUl">
                            <h4>Quock Shop</h4>
                            <li class="mb-2"><a href="">Laptops</a></li>
                            <li class="mb-2"><a href="">Destops</a></li>
                            <li class="mb-2"><a href="">Tvs</a></li>
                            <li class="mb-2"><a href="">Appliances</a></li>
                            <li class="mb-2"><a href="">Phones</a></li>
                            <li class="mb-2"><a href="">Cameras</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footerUl">

                        <ul class="">
                            <h4>Service</h4>
                            <li class="mb-2"><a href="">Online Help</a></li>
                            <li class="mb-2"><a href="">Contact Us</a></li>
                            {{-- <li class="mb-2"><a href="">Order Status</a></li>
                            <li class="mb-2"><a href="">Change Location</a></li>
                            <li class="mb-2"><a href="">FAQ’s</a></li> --}}
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-sm-2">
                    <div class="footerUl">
                        <h2>Policies</h2>
                        <ul class="">
                            <li class="mb-2"><a href="">Terms of Use</a></li>
                            <li class="mb-2"><a href="">Privecy Policy</a></li>
                            <li class="mb-2"><a href="">Refund Policy</a></li>
                            <li class="mb-2"><a href="">Billing System</a></li>
                            <li class="mb-2"><a href="">Ticket System</a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-sm-2">
                    <div class="">
                        <h2>About Shopper</h2>
                        <ul class="footerUl">
                            <li class="mb-2"><a href="">Company Information</a></li>
                            <li class="mb-2"><a href="">Careers</a></li>
                            <li class="mb-2"><a href="">Store Location</a></li>
                            <li class="mb-2"><a href="">Affillate Program</a></li>
                            <li class="mb-2"><a href="">Copyright</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" /><span><button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button></span>

                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="">Made with love by Ubong Paul &copy; 2021</p>


                </div>
                <div class="col-md-4 ">
                <p class="pull-right offset-2">Designed by <span><a target="_blank" href="http://www.paul.com">JPAUL</a></span></p>

                </div>
            </div>
        </div>
    </div>

</footer><!--/Fo
oter-->
@endsection

@section('scripts')

@endsection




