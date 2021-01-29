<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    @yield('title')

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

    @yield('css')
</head>

<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    @include('admin::dashboard.shared.nav-builder')

    @include('admin::dashboard.shared.header')

    <div class="c-body">
        <main class="c-main">

            @yield('content')

        </main>
        @include('admin::dashboard.shared.footer')
    </div>
</div>

<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('js/coreui-utils.js') }}"></script>
@yield('javascript')
</body>
</html>
