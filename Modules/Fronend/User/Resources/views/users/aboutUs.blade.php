@extends('user::layouts.masterUser')

@section('title', 'About Us')

@section('content')
    <div class="about-us">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="about-us-left">
                    <div class="about-us-left-content">
                        <p>Impress Gift specialise in corporate gift in Singapore. We pride ourselves in giving fast and
                            reliable Quality services to all our customer. We provide the Best Gifting to you. We manage
                            import and export on gifts to Europe and Asia. We have our very own sourcing Department in
                            our factory which gives us the advantage to give you Direct Factory Pricing.</p>
                    </div>
                    <div class="about-us-left-reason mt-4">
                        <h2 class="mb-4">Why Impress Gift</h2>
                        <p>Because we believed that</p>
                        <p>A GIFT that is handed out, will provide an impression to the customer.</p>
                        <p>A GIFT that is handed out, represent your company</p>
                        <p>A GIFT that is handed out, creates a first impression BONDing between</p>
                        <p>We believe in QUALITY Assurance</p>
                        <p>We believe in High Perceive Value and Practicality of Gifting</p>
                        <p>We believe in Advertising and Promotional branding with Gifting</p>
                        <p>We love the Season OF MPRESSIVE GIFTING</p>
                        <p>LASTLY, Providing EXCELLENT CUSTOMER SERVICE is our PRACTISE.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="about-us-right text-center">
                    <img class="img-fluid" src="{{ URL::asset('users/images/a6e7c25ea0e861b638f9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
