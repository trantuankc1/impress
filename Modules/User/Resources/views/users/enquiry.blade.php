@extends('user::layouts.masterUser')

@section('title', 'Enquiry')

@section('content')
    @if(!empty(session('cart')))
        <script>
            //Update Cart
            function addPeriod(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                x3 = 'đ';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }
                return x1 + x2 + x3;
            }
            $(function () {
                $(".num-order").change(function (e) {
                    e.preventDefault();

                    var ele = $(this);

                    $.ajax({
                        url: '{{ route('user.updateCart') }}',
                        type: "patch",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id"),
                            quantity: ele.parents("tr").find(".quantity").val()
                        },
                        dataType: 'json',
                        success: function (data) {
                            $('.total-'+data.id).text(addPeriod(data.totals))
                            $('.totalPrice').text(addPeriod(data.totalPrices))
                            $('.totalQuantity').text(data.totalQuantity)
                        },
                    });
                });
            });
        </script>
        <div class="enquiry table-responsive-xl">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" class="th-destroy"></th>
                    <th scope="col" class="th-product">Product</th>
                    <th scope="col" class="th-quantity text-center">Quantity</th>
                    <th scope="col" class="th-unit-price text-center">Unit Price</th>
                    <th scope="col" class="th-total text-center">Total</th>
                </tr>
                </thead>
                <tbody>
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                @if(Session('cart'))
                    @foreach(Session('cart') as $item)
                        <tr data-id = {{ $item['id'] }}>
                            <td scope="row" class="td-destroy">
                                <a id="remove-from-cart" class="d-block" href="{{ route('user.deleteCart', $item['id']) }}">
                                    <i class="fa-solid fa-xmark"></i></a>
                            </td>
                            <td class="td-product">
                                <a class="d-block d-flex" href="{{ route('user.detail', $item['id']) }}">
                                    <img class="td-product-image" src="/storage/{{ $item['image'] }}" alt="">
                                    <p class="td-product-name">{{ $item['name'] }}</p>
                                </a>
                            </td>
                            <td class="td-quantity text-center">
                                <input type="number" name="num_order" class="num-order quantity" data-id="{{ $item['id'] }}" value="{{ $item['quantity'] }}" min="1" max="99">
                            </td>
                            <td class="td-unit-price text-center">
                                <span>{{ number_format($item['price'], 0, '', '.') }} đ</span>
                            </td>
                            <td class="td-total text-center">
                                <span class="total-{{ $item['id'] }}" >{{ number_format($item['quantity']*$item['price'], 0, '', '.') }} đ</span>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
                <tfooter>
                    <tr>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td class="sub-total text-center" style="font-weight: 600; font-max-size: 14px">Sub-Total</td>
                        <td class="text-center totalPrice" style="color: #ffb80e; font-size: 14px; font-weight: 700">{{ number_format($total, 0, '', '.') }} đ</td>
                    </tr>
                </tfooter>
            </table>
        </div>
    @else
        <div class="cart-null text-center" style="margin: 40px 0">
            <img src="{{ URL::asset('users/images/empty-cart_large.png') }}" alt="">
        </div>
    @endif
    </div>
    <div class="form-product-enquiry">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-enquiry col-md-8 mt-5">
                    <h2 class="text-center">Product Enquiry</h2>
                    @guest()
                        <form action="{{ route('user.login') }}">
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
                                    <input type="text" name="" id="requestDetail" placeholder="Request Detail:"
                                           class="request-detail">
                                </div>
                                <div class="text-center col-md-12">
                                    <input type="submit" value="Send Enquiry" class="btn-enquiry">
                                </div>
                            </div>
                        </form>
                    @else
                        <form action="{{ route('user.buyProduct') }}" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="" id="Name" placeholder="Name:" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="email" placeholder="Email:" value="{{ Auth::user()-> email}}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="address" placeholder="Address:" value="{{ Auth::user()->address }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="phone" placeholder="Phone:" value="{{ Auth::user()->phone }}">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="" id="requestDetail" placeholder="Request Detail:"
                                           class="request-detail">
                                </div>
                                @csrf
                                @if(!empty(session('cart')))
                                    <div class="text-center col-md-12">
                                        <input type="submit" value="Send Enquiry" class="btn-enquiry">
                                    </div>
                                @else
                                    <div class="text-center col-md-12">
                                        <input type="submit" value="Send Enquiry" class="btn-enquiry" disabled style="opacity: 0.7">
                                    </div>
                                @endif
                            </div>
                        </form>
                    @endguest
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
@endsection
