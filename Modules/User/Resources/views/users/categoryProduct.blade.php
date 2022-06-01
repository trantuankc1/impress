@extends('user::layouts.masterUser')

@section('title', 'Our Product')

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
            <div class="our-products">
                <div class="product-title text-center">
                    <h1>Our Products</h1>
                </div>
                <div class="list-product">
                    <div class="row">
                        @foreach($listProduct as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 product-item text-center">
                                <a class="product-item-images" href="{{ route('user.detail', $item->id) }}">
                                    <img class="img-fluids" src="/storage/{{ $item->image }}" alt="">
                                </a>
                                <div class="product-item-title">
                                    <a href="{{ route('user.detail', $item->id) }}">{{ $item->name }}</a>
                                </div>
                                <div class="product-item-price">
                                    <span>{{ number_format($item->price, 0, '', '.') }} đ</span>
                                </div>
                                <div class="product-item-buy">
                                    <a href="{{ route('user.addCart', $item->id) }}" class="btn">Add to Enquiry</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="read-more text-center">
                    <a href="" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

