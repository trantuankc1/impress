@extends('user::layouts.masterUser')

@section('title', 'Enquiry')

@section('content')
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
            <tr>
                <td scope="row" class="td-destroy">
                    <a class="d-block" href=""> <i class="fa-solid fa-xmark"></i></a>
                </td>
                <td class="td-product">
                    <a class="d-block d-flex" href="">
                        <img class="td-product-image" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                        <p class="td-product-name">Lorem ipsum dolor sit amet</p>
                    </a>
                </td>
                <td class="td-quantity text-center">
                    <input type="number" name="" id="" value="200" min="0">
                </td>
                <td class="td-unit-price text-center">
                    <span>$155.00</span>
                </td>
                <td class="td-total text-center">
                    <span>$155.00</span>
                </td>
            </tr>
            <tr>
                <td scope="row" class="td-destroy">
                    <a class="d-block" href=""> <i class="fa-solid fa-xmark"></i></a>
                </td>
                <td class="td-product">
                    <a class="d-block d-flex" href="">
                        <img class="td-product-image" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                        <p class="td-product-name">Lorem ipsum dolor sit amet</p>
                    </a>
                </td>
                <td class="td-quantity text-center">
                    <input type="number" name="" id="unit-quantity" value="200" min="0">
                </td>
                <td class="td-unit-price text-center">
                    <span>$155.00</span>
                </td>
                <td class="td-total text-center">
                    <span>$155.00</span>
                </td>
            </tr>
            <tr>
                <td scope="row" class="td-destroy">
                    <a class="d-block" href=""> <i class="fa-solid fa-xmark"></i></a>
                </td>
                <td class="td-product">
                    <a class="d-block d-flex" href="">
                        <img class="td-product-image" src="{{ URL::asset('users/images/Layer_141-removebg-preview.png') }}" alt="">
                        <p class="td-product-name">Lorem ipsum dolor sit amet</p>
                    </a>
                </td>
                <td class="td-quantity text-center">
                    <input type="number" name="" value="200" min="0">
                </td>
                <td class="td-unit-price text-center">
                    <span>$155.00</span>
                </td>
                <td class="td-total text-center">
                    <span>$155.00</span>
                </td>
            </tr>
            </tbody>
            <tfooter>
                <tr>
                    <td style="border: none"></td>
                    <td style="border: none"></td>
                    <td style="border: none"></td>
                    <td class="sub-total text-center" style="font-weight: 600; font-max-size: 14px">Sub-Total</td>
                    <td class="text-center" style="color: #ffb80e; font-size: 14px; font-weight: 700">$35.00</td>
                </tr>
                <tr>
                    <td style="border: none"></td>
                    <td style="border: none"></td>
                    <td style="border: none"></td>
                    <td class="total text-center" style="font-weight: 600; font-max-size: 14px">Total</td>
                    <td class="text-center" style="color: #ffb80e; font-size: 14px; font-weight: 700">$35.00</td>
                </tr>
            </tfooter>
        </table>
    </div>
    </div>
    <div class="form-product-enquiry">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="form-enquiry col-md-8 mt-5">
                    <h2 class="text-center">Product Enquiry</h2>
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
                                <input type="text" name="" id="requestDetail" placeholder="Request Detail:"
                                       class="request-detail">
                            </div>
                            <div class="text-center col-md-12">
                                <input type="submit" value="Send Enquiry" class="btn-enquiry">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
@endsection
