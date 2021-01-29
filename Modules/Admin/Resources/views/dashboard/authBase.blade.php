<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Tomosia Admin</title>

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

    @yield('css')
</head>
<body class="c-app flex-row align-items-center">

@yield('content')

<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>

@yield('javascript')

</body>
</html>
