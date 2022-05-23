<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('users/css/global.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/header.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/home.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/aboutUs.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/project.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/contacts.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/enquiry.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/ourProduct.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('users/css/responsive.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <script src="{{ URL::asset('users/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('users/js/main.js') }}"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div id="login-function" class="clearfix pt-2 pb-2" style="background: #f2f2f2;">
    <div class="container">
        @guest()
            <div class="login-function-left d-flex" style="float: left;">
                <a class="login" href="{{route('user.login')}}">Login</a>
                <span>|</span>
                <a class="register" href="{{route('user.register')}}">Register</a>
            </div>
            <div class="login-function-right" style="float: right;">
                <a href="{{ route('user.enquiry') }}">
                    <i class="fa-solid fa-heart"></i>
                    <span>Enquiry (3)</span>
                </a>
            </div>
        @else
            <div class="login-function-left d-flex" style="float: left;">
                <a class="login" href="">{{ Auth::user()->name }}</a>
                <span>|</span>
                <a class="register" href="{{route('user.logout')}}">Logout</a>
            </div>
            <div class="login-function-right" style="float: right;">
                <a href="{{ route('user.enquiry') }}">
                    <i class="fa-solid fa-heart"></i>
                    <span>Enquiry (3)</span>
                </a>
            </div>
        @endguest
    </div>
</div>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12">
                    <div class="header-logo mt-2">
                        <img src="{{ URL::asset('users/images/logo.png') }}" alt="" class="logo">
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="header-service">
                        <div class="header-service-item">
                            <a href=""><i class="header-service-icon bx bxs-truck"></i></a>
                            <div class="content-ship">
                                <h3>Free Shipping</h3>
                                <span>Free shipping on all order</span>
                            </div>
                        </div>
                        <div class="header-service-item">
                            <a href="tel:65 6876 0079"><i class="header-service-icon bx bxs-phone-call"></i></a>
                            <div class="content-ship">
                                <h3>Hotline</h3>
                                <span>+65 6876 0079</span>
                            </div>
                        </div>
                        <div class="header-service-item">
                            <a href="{{ route('user.enquiry') }}"><i class="header-service-icon bx bxs-cart-add"></i></a>
                            <div class="content-ship">
                                <h3>Enquiry Cart</h3>
                                <span>(3)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-body clearfix">
        <div class="container">
            <div class="nav__mobile">
                <ul class="nav__mobile-list">
                    <li class="nav__mobile-item">
                        <a href="{{route('user.index')}}" class="nav__mobile-item-link">HOME</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="{{route('user.aboutUs')}}" class="nav__mobile-item-link">ABOUT US</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="{{route('user.project')}}" class="nav__mobile-item-link">PROJECTS</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="{{route('user.ourProduct')}}">OUR PRODUCTS</a>
                    </li>
                    <li class="nav__mobile-item">
                        <a href="{{route('user.contact')}}" class="nav__mobile-item-link">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <div class="icon-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="search">
                <input type="text" name="" id="" placeholder="search">
                <i class='bx bx-search-alt-2'></i>
            </div>
        </div>
    </div>
</header>
<div id="content">
    <div class="container">
        @yield('content')
    </div>
    <div class="nav__mobile__responsive">
        <h2>List Menu</h2>
        <ul id="s" class="nav__mobile-list__responsive">
            <li class="nav__mobile-item">
                <a href="http://localhost:63342/FontEndProject/home.html?_ijt=uaaoc8qihioc5jn6kc8jh2nrj7&_ij_reload=RELOAD_ON_SAVE"
                   class="nav__mobile-item-link">HOME</a>
            </li>
            <li class="nav__mobile-item">
                <a href="" class="nav__mobile-item-link">ABOUT US</a>
            </li>
            <li class="nav__mobile-item">
                <a href="" class="nav__mobile-item-link">PROJECTS</a>
            </li>
            <li class="nav__mobile-item">
                <a href="http://localhost:63342/FontEndProject/ourProducts.html?_ijt=c1naf97vgr2qugb399jto182a2&_ij_reload=RELOAD_ON_SAVE#"
                   class="nav__mobile-item-link">OUR PRODUCTS</a>
            </li>
            <li class="nav__mobile-item">
                <a href="" class="nav__mobile-item-link">TESTIMONIAL</a>
            </li>
            <li class="nav__mobile-item">
                <a href="" class="nav__mobile-item-link">CONTACT US</a>
            </li>
        </ul>
    </div>
</div>
