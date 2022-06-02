@extends('admin::layouts.master')

@section('content')
    <div class="container">
        <h2 style="text-align: center; margin-top: 15px;">Danh sách đơn hàng</h2>
        <table class="table table-hover table-bordered " style="margin-left: 100px; margin-top: 30px">
            <tr>
                <td>ID</td>
                <td>User ID</td>
                <td>Trạng thái</td>
                <td>Thời gian tạo</td>
                <td>Thời gian cập nhat </td>
            </tr>
            <tbody>
                @foreach($order as $listOrder)
                    <tr>
                        <td>{{ $listOrder->id }}</td>
                        <td>{{ $listOrder->user_id }}</td>
                        @if($listOrder->status == 1)
                            <td style="color: seagreen">Đơn hàng đã xác nhận</td>
                        @else
                            <td style="color: red">Đơn hàng chưa xác nhận</td>
                        @endif
                        <td>{{ $listOrder->created_at }}</td>
                        <td>{{ $listOrder->updated_at }} </td>
                        <td><a href="{{ route('orderDetail.show', $listOrder) }}" class="btn btn-info"><i style="width: 30px;" class="fa-solid fa-eye"></i></a></td>
                        <td>
                            <form action="{{ route('order.destroy', $listOrder) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger"><i style="width: 30px;" class="fa-solid fa-trash-can"></i></button>
                            </form>
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
