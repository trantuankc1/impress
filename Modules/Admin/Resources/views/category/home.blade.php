@extends('admin::layouts.master')

@section('content')
    <div class="container">
            <h3 style="text-align: center; margin-top: 15px;">Danh mục sản phẩm</h3>
            <a href="{{ route('category.create') }}" style="float: right; margin-right: -100px" class="btn btn-success">
                Thêm danh mục sản phẩm
            </a>
            <table class="table table-hover table-bordered" style="margin-left: 100px; margin-top: 60px">
                <tr>
                    <td>ID</td>
                    <td>Tên danh mmục</td>
                    <td>Xóa</td>
                </tr>
                <tbody>
                    @foreach($category as $categorys)
                        <tr>
                            <td>{{ $categorys->id }}</td>
                            <td>{{ $categorys->name }}</td>
                            <td>
                                <form action="{{ route('category.destroy', $categorys) }}" method="post">
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
        {{ $category->links() }}
@endsection
<style>
    .hidden{
        display: none;
    }
</style>
