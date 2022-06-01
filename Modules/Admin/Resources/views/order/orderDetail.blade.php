@extends('admin::layouts.master')

@section('content')
    <div class="container">
        <h2 style="text-align: center; margin-top: 15px;">Chi tiết đơn hàng</h2>
        <table class="table table-hover table-bordered" style="margin-left: 100px; margin-top: 30px">
            <tr>
                <td>Tên khách hàng</td>
                <td>Số điện thoại</td>
                <td>Địa Chỉ</td>
            </tr>
            <tbody>
            @foreach($findUser as $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{{ $value->address }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table class="table table-hover table-bordered table-striped" style="margin-left: 100px; margin-top: 30px">
            <tr>
                <td>ID</td>
                <td>ID Sản phẩm</td>
                <td>id Đơn hàng</td>
                <td>Số lượng</td>
                <td>Giá</td>
                <td>Ảnh</td>
                <td>Tổng tiền</td>
                <td>Thời gian tạo</td>
                <td>Thời gian cập nhật</td>
            </tr>
            <tbody>
            @foreach($orderDetail as $key => $showDetail)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $showDetail->name }}</td>
                    <td>{{ $showDetail->order_id }}</td>
                    <td>{{ $showDetail->quantity }}</td>
                    <td>{{ number_format($showDetail->unit_price)}} VND</td>
                    <td><img style="width: 100px; height: auto" src="/storage/{{ $showDetail->image }}" alt=""></td>
                    <td>{{ number_format($showDetail->quantity * $showDetail->unit_price) }} VND</td>

                    <td>{{ $showDetail->created_at }}</td>
                    <td>{{ $showDetail->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>

            @php $total = 0 @endphp
            @foreach($orderDetail as $key => $showDetail)
                @php $total+= $showDetail->unit_price*$showDetail->quantity @endphp
            @endforeach
            <td style="color: red">Tổng thanh toán: {{ number_format($total) }} </td>
            </tfoot>
        </table>
    </div>
@endsection
<style>
    .hidden {
        display: none;
    }
</style>
