@extends('admin::layouts.master')

@section('content')
    <div class="container">
        <h3 style="text-align: center; margin-top: 15px">Danh sách sản phẩm</h3>
        <a href="{{ route('products.create') }}" class="btn btn-success" style="float: right; margin-right: -100px">Thêm Mới Sản Phẩm </a>
        <table class="table table-hover table-bordered" style="margin-left: 100px; margin-top: 60px">
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
                    <td>{{ number_format($values->price, 0, '', '.') }} VND</td>
                    <td>{{ $values->content }}</td>
                    <td><img style="width: 100px; height: auto" src="/storage/{{ $values->image }}" alt=""></td>
                    <td><a href="{{ route('products.edit', $values) }}" class="btn btn-info"><i style="width: 30px;" class="fa-solid fa-pen"></i></a></td>
                    <td>
                        <form method="post" action="{{ route('products.destroy', $values) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i style="width: 30px;" class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links() }}
@endsection
<style>
    .hidden {
        display: none;
    }
</style>
