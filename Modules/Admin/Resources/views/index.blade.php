@extends('admin::dashboard.base')

@section('title')
    <title>Tomosia</title>
@endsection

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@endsection
