@extends('admin::layouts.master')

@section('content')
    <div class="container">
            <table class="table table-hover table-bordered table-striped" style="margin-left: 100px; margin-top: 40px" >
                <h3 style="text-align: center">Danh sách người dùng</h3>
                <tr>
                    <td>ID</td>
                    <td>Tên nguời sử dụng</td>
                    <td>Email</td>
                    <td>Thời gian tạo </td>
                    <td>Trạng thái</td>
                    <td>Xóa</td>
                    <td>Khóa</td>
                </tr>
                <tbody>
                        @foreach($data as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }} </td>
                                @if($user->status == 1)
                                    <td style="color: green;">Đang hoạt động</td>
                                @else
                                    <td style="color: red">Tài khoản đã bị khóa </td>
                                @endif
                                <td>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i style="width: 30px;" class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                                <td>
                                    @if($user->status == 1)
                                        <form method="post" action="{{ route('users.update', $user) }}">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-danger"><i class="fa-solid fa-lock"></i></button>
                                        </form>
                                        @else
                                        <form method="post" action="{{ route('users.edit', $user) }}">
                                            @csrf
                                            @method('get')
                                            <button class="btn btn-success"><i class="fa-solid fa-unlock"></i></button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
    </div>
@endsection
<style>
    .hidden{
        display: none;
    }
</style>
