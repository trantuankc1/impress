@extends('user::layouts.masterUser')

@section('title', 'Contact')

@section('content')
    <div class="contact">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-left">
                    <div class="contact-left-title mt-3">
                        <h2>Get in touch with us</h2>
                    </div>
                    <div class="contact-left-address mt-">
                        <i class="icon fa-solid fa-location-dot"></i>
                        <span>96C Jalan Senang Singapore 41848</span>
                    </div>
                    <div class="contact-left-email mt-1">
                        <i class="icon fa-solid fa-phone"></i>
                        <span>+65 6876 0079</span>
                    </div>
                    <div class="contact-left-phone mt-1">
                        <i class="icon fa-solid fa-envelope"></i>
                        <span>tt.tu.nguyen1@tomosia.com</span>
                    </div>
                    <div class="form-contact-left mt-5">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="" id="firstName" placeholder="First name:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="lastName" placeholder="Last name:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="email" placeholder="Email:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="phone" placeholder="Phone:">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="" id="requestDetail" placeholder="Request Detail:" class="request-detail">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Submit request" class="btn-contact">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-right">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8845193265174!2d105.76967491549898!3d21.037306185993693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf892c52811%3A0x82f45cd695b27755!2sC%C3%B4ng%20ty%20TNHH%20TOMOSIA!5e0!3m2!1svi!2s!4v1652774086242!5m2!1svi!2s" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
