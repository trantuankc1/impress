<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    @include('admin::layouts.css')
</head>
<body class="">
<div class="wrapper">


    <!-- Navbar -->
    @include('admin::layouts.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin::layouts.sibar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')


</div>
@include('admin::layouts.script')
</body>
</html>
