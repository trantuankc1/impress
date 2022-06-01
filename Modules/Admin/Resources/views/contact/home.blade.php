@extends('admin::layouts.master')

@section('content')
    <div class="container">
        <h2 style="text-align: center; margin-top: 15px;">Danh sách liên hệ</h2>
            <table class="table table-hover table-bordered" style="margin-left: 100px; margin-top: 20px">
                <tr>
                    <td>ID</td>
                    <td>Họ </td>
                    <td>Tên</td>
                    <td>email</td>
                    <td>Số điện thoại</td>
                    <td>Thông tin</td>
                    <td>Ngày tạo</td>
                    <td>Ngày cập nhật</td>
                </tr>
                <tbody>
                @foreach($contact as $listContact)
                    <tr>
                        <td>{{ $listContact->id }}</td>
                        <td>{{ $listContact->first_name }} </td>
                        <td>{{ $listContact->last_name }}</td>
                        <td>{{ $listContact->email }}</td>
                        <td>{{ $listContact->phone }}</td>
                        <td>{{ $listContact->request_detail }}</td>
                        <td>{{ $listContact->created_at }}</td>
                        <td>{{ $listContact->updated_at }}</td>
                        <td>
                            <form action="{{ route('listContact.destroy', $listContact) }}" method="post">
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
        {{ $contact->links() }}
@endsection
<style>
    .hidden{
        display: none;
    }
</style>
