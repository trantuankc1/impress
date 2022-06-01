<div style="background-color:#ffffff;color:#000000">
    <div style="margin:0px auto;width:600px">
        <div style="padding:30px 20px">
            <table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#ffffff;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
                <tbody>
                <tr>
                    <td>
                        <h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Cảm ơn quý khách {{ Auth::user()->name }} đã đặt hàng tại Impress</h1>
                        <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Impress rất vui thông báo đơn hàng của quý khách đã được tiếp nhận và đang trong quá trình xử lý. Impress sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao.</p>
                        <h3 style="font-size:13px;font-weight:bold;color:#e41e24;text-transform:uppercase;margin:20px 0 0 0;border-bottom:1px solid #ddd">Thông tin đơn hàng<span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày {{  \Illuminate\Support\Carbon::now('Asia/Ho_Chi_Minh')->day }} Tháng {{ \Illuminate\Support\Carbon::now()->month }} Năm {{ \Illuminate\Support\Carbon::now()->year }} {{ \Illuminate\Support\Carbon::now()->toTimeString() }})</span></h3>
                    </td>
                </tr>
                <tr>
                    <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th align="left" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold" width="50%">Thông tin thanh toán</th>
                                <th align="left" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold" width="50%"> Địa chỉ giao hàng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="padding:3px 9px 9px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top"><span style="text-transform:capitalize">{{ Auth::user()->name }}</span><br><a href="{{ Auth::user()->email }}" target="_blank">{{ Auth::user()->email }}</a><br>{{ Auth::user()->phone }}</td>
                                <td style="padding:3px 9px 9px 9px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top"><span style="text-transform:capitalize">{{ Auth::user()->name }}</span><br><a href="{{ Auth::user()->email }}" target="_blank">{{ Auth::user()->email }}</a><br>{{ Auth::user()->address }}<br>{{ Auth::user()->phone }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>Lưu ý: Đối với đơn hàng đã được thanh toán trước, nhân viên giao nhận có thể yêu cầu người nhận hàng cung cấp CMND / giấy phép lái xe để chụp ảnh hoặc ghi lại thông tin.</i></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 style="text-align:left;margin:10px 0;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#e41e24">CHI TIẾT ĐƠN HÀNG</h2>
                        <table border="0" cellpadding="0" cellspacing="0" style="background:#ffffff" width="100%">
                            <thead>
                            <tr>
                                <th align="left" bgcolor="#e41e24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Sản phẩm</th>
                                <th align="left" bgcolor="#e41e24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Đơn giá</th>
                                <th align="left" bgcolor="#e41e24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Số lượng</th>
                                <th align="left" bgcolor="#e41e24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Giảm giá</th>
                                <th align="right" bgcolor="#e41e24" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm</th>
                            </tr>
                            </thead>
                            <tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            @if(Session('cart'))
                                @foreach(Session('cart') as $item)
                                    @php
                                        $totalPrice = $item['quantity']*$item['price'];
                                    @endphp
                                    <tr>
                                        <td align="left" style="padding:3px 9px" valign="top"><span>{{ $item['name'] }}</span><br></td>
                                        <td align="left" style="padding:3px 9px" valign="top"><span>{{ number_format($item['price'], 0, '', '.') }}đ</span></td>
                                        <td align="left" style="padding:3px 9px" valign="top">{{ $item['quantity'] }}</td>
                                        <td align="left" style="padding:3px 9px" valign="top">0</td>
                                        <td align="right" style="padding:3px 9px" valign="top"><span>{{ number_format($totalPrice, 0, '', '.') }}đ</span></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot
                                style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                            <tr>
                                <td align="right" colspan="4" style="padding:5px 9px">Tạm tính</td>
                                <td align="right" style="padding:5px 9px"><span>{{ number_format($total, 0, '', '.') }}đ</span></td>
                            </tr>
                            <tr>
                                <td align="right" colspan="4" style="padding:5px 9px">Phí vận chuyển</td>
                                <td align="right" style="padding:5px 9px"><span>0</span></td>
                            </tr>
                            <tr bgcolor="#eee">
                                <td align="right" colspan="4" style="padding:7px 9px"><strong><big>Tổng giá trị đơn hàng</big> </strong></td>
                                <td align="right" style="padding:7px 9px"><strong><big><span>{{ number_format($total, 0, '', '.') }}đ</span> </big></strong></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div style="margin-top: 20px"><a href="{{ route('user.orderConfirmed', $orderId) }}" style="display:inline-block;text-decoration:none;background-color:#e41e24!important;margin-right:30px;text-align:center;border-radius:3px;color:#fff;padding:5px 10px;font-size:12px;font-weight:bold;margin-left:35%;margin-top:5px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://x64km.mjt.lu/lnk/CAAAAuaAaHgAAAAAAAAAAJq0W2kAAAAA3NwAAAAAABPsQgBij5edT5QW5i8NRBSec8HzGKPHhQAPBhU/6/GmopZ6Kq6W1kdscmZEkzpQ/aHR0cHM6Ly90aWtpLnZuL3NhbGVzL29yZGVyL3ZpZXcvNDY5Nzc4NTk4&amp;source=gmail&amp;ust=1653665941367000&amp;usg=AOvVaw0t3jMCv81UlS7W7pDyoX-v">Xác nhận đợn hàng</a></div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;
                        <p style="margin:10px 0 0 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Mọi thắc mắc và góp ý, quý khách vui lòng liên hệ với Impress Care qua <a href="#" target="_blank" data-saferedirecturl="">https://Impress.vn</a>. Đội ngũ Impress luôn sẵn sàng hỗ trợ bạn.</p>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;<p>Một lần nữa Impress cảm ơn quý khách.</p><p><strong><a href="{{ route('user.home') }}" style="color:#e41e24;text-decoration:none;font-size:14px" target="_blank" data-saferedirecturl="">Impress</a> </strong></p></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
