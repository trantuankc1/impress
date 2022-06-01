@extends('user::layouts.masterUser')

@section('title', 'Detail Product')

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
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <div class="row">
                <div class="detail">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-12 image-product text-center">
                            <img src="/storage/{{ $detailProduct->image }} " alt="">
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 product-detail">
                            <div class="title-product-detail">
                                <h1>{{ $detailProduct->name }}</h1>
                            </div>
                            <div class="content-product-detail mt-4">
                                <p>{{ $detailProduct->content }}</p>
                            </div>
                            <div class="price-product-detail mt-2">
                                <span>{{ number_format($detailProduct->price, 0, '', '.') }} đ</span>
                            </div>
                            <div class="enquiry-now mt-4">
                                <a class="btn" href="{{ route('user.addCart', $detailProduct->id) }}">Enquiry Now</a>
                            </div>
                            <ul class="social-network d-flex mt-4">
                                <li class="facebook">
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="">
                                        <i class="fa-brands fa-twitter"></i>
                                        <span>twitter</span>
                                    </a>
                                </li>
                                <li class="google">
                                    <a href="">
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <span>google</span>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a href="">
                                        <i class="fa-brands fa-pinterest-p"></i>
                                        <span>pinterest</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 description mt-5">
                            <div class="description-title">
                                <h1>Description</h1>
                            </div>
                            <div class="description-content">
                                <p>{{ $detailProduct->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-products mt-5">
                    <div class="product-title text-center mb-5">
                        <h1>Related Products</h1>
                    </div>
                    <div class="list-product">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="">
                                    <img class="img-fluids" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="">iMP4102 – Memo Desk Set</a>
                                </div>
                                <div class="product-item-price">
                                    <span>$10</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
