@extends('user::layouts.master')

@section('link')
<link rel="stylesheet" href="{{ URL::asset('users/css/verify.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Xác minh tài khoản của bạn</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <p>để kích hoạt tài khoản của bạn hãy click phần dưới đây và vào email để xác minh</p>
                        <form class="d-inline" method="POST" action="{{ route('user.verify', $idUser) }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                <u>click vào đây.</u>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
