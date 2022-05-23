@extends('admin::layouts.master')

@section('content')
    <div class="container">
        <div class="table">
            <table class="table table-hover table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Giá Sản Phẩm</td>
                    <td>Giới Thiệu Sản Phẩm</td>
                    <td>Ảnh Sản Phẩm</td>
                    <td>Sửa</td>
                    <td>Xóa</td>
                </tr>
                <tbody>
                    @foreach($data as $values)
                        <tr>
                            <td>{{ $values->id }}</td>
                            <td>{{ $values->name }}</td>
                            <td>{{ number_format($values->price) }} VND</td>
                            <td>{{ $values->content }}</td>
                            <td><img src="{{ public_path($values->image)  }}"alt=""></td>
                            <td><a href="{{ route('products.edit', $values) }}" class="btn btn-info">Sửa</a> </td>
                            <td>
                                <form method="post" action="{{ route('products.destroy', $values) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $data->links() }}
    </div>
@endsection
<style>
    .hidden{
        display: none;
    }
</style>
