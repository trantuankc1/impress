@extends('user::layouts.masterUser')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action">New Arrivals</a>
                    <a href="" class="list-group-item list-group-item-action">Promotions</a>
                    <a href="" class="list-group-item list-group-item-action">Apparel</a>
                    <a href="" class="list-group-item list-group-item-action">Accessories</a>
                    <a href="" class="list-group-item list-group-item-action">Carrier</a>
                    <a href="" class="list-group-item list-group-item-action">Drinkware</a>
                    <a href="" class="list-group-item list-group-item-action">Excutive</a>
                    <a href="" class="list-group-item list-group-item-action">Gift Sets</a>
                    <a href="" class="list-group-item list-group-item-action">Life Style</a>
                    <a href="" class="list-group-item list-group-item-action">Office</a>
                    <a href="" class="list-group-item list-group-item-action">Outdoor</a>
                    <a href="" class="list-group-item list-group-item-action">Stationeries</a>
                    <a href="" class="list-group-item list-group-item-action">Travel</a>
                </div>
                <div class="banner">
                    <img src="{{ URL::asset('users/images/banner.jpg') }}" alt="">
                    <a class="btn btn-danger view-now" href="">View now</a>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <div class="home-page">
                <div class="feature-products">
                    <div class="product-title text-center">
                        <h1>Feature products</h1>
                    </div>
                    <div class="list-product">
                        <div class="row">
                            @foreach($data as $product)
                                <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                    <a class="product-item-images" href="">
                                        <img class="img-fluids" src='{{ asset('public/storage'. $product->image) }}' alt="">
                                    </a>
                                    <div class="product-item-title">
                                        <a href="">{{ $product->name }}</a>
                                    </div>
                                    <div class="product-item-price">
                                        <span>{{ number_format($product->price) }} VND</span>
                                    </div>
                                    <div class="product-item-buy">
                                        <a href="" class="btn">Add to Enquiry</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="view-all text-center">
                        <a href="" class="btn">View all</a>
                    </div>
                </div>
                <!--                    <div class="customised mt-5 mb-5 clearfix">-->
                <!--                        <div class="customised-left">-->
                <!--                            <img src="images/Screenshot from 2022-05-17 22-27-15.png" alt="">-->
                <!--                        </div>-->
                <!--                        <div class="customised-right">-->
                <!--                            <img src="images/banner-right.png" alt="">-->
                <!--                        </div>-->
                <!--                    </div>-->
                <div class="new-products mb-5">
                    <div class="product-title text-center">
                        <h1>New products</h1>
                    </div>
                    <div class="list-product">
                        <div class="row">
                            @foreach($data as $product)
                                <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                    <a class="product-item-images" href="">
                                        <img class="img-fluids" src='/storage/app/image{{ $product->image }}' alt="">
                                    </a>
                                    <div class="product-item-title">
                                        <a href="">{{ $product->name }}</a>
                                    </div>
                                    <div class="product-item-price">
                                        <span>{{ number_format($product->price) }} VND</span>
                                    </div>
                                    <div class="product-item-buy">
                                        <a href="" class="btn">Add to Enquiry</a>
                                    </div>
                                </div>
    @endforeach

@endsection
