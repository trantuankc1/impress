@extends('user::layouts.master')

@section('title', 'Login')

@section('link')
    <link rel="stylesheet" href="{{ URL::asset('users/css/style.css') }}">
    <script src="{{ URL::asset('users/js/jquery.js') }}"></script>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
@endsection

@section('content')
    <div class="header">
        <div class="header-main">
            <h1>Impress Login</h1>
            <div class="header-bottom">
                <div class="header-right w3agile">
                    <div class="header-left-bottom agileinfo">
                        <form action="" method="POST">
                            <input type="email" value="" name="email" placeholder="Email">
                            @error('email')
                            <span style="color: #ff8888; font-size: 14px">{{ $message }}</span>
                            @enderror
                            <input type="password" value="" name="password" placeholder="Password">
                            @error('password')
                            <span style="color: #ff8888; font-size: 14px">{{ $message }}</span>
                            @enderror
                            <div class="remember">
                             <span class="checkbox1">
                                   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                             </span>
                                <div class="forgot">
                                    <h6><a href="#">Forgot Password?</a></h6>
                                </div>
                                <div class="clear"></div>
                            </div>
                            @csrf
                            <input type="submit" value="Login">
                        </form>
                        <div class="home text-center">
                            <a href="{{route('user.home')}}">Quay lại trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
