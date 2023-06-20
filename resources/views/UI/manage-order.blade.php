@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/manage.css') }}">
@endsection

@section('content')
    <div class="manage">
        <div class="manage__container container">
            <span class="text-danger">
                @error('numberphone')
                    {{ $message }}
                @enderror

                @error('email')
                    {{ $message }}
                @enderror
            </span>

            <span class="text-success">
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @endif
            </span>

            <div class="manage__container__function">
                <a href="{{route("manage.product")}}" class="manage__container__function__item btn btn-link">Quản lý sản phẩm</a>
                <a href="{{route("manage.category")}}" class="manage__container__function__item btn btn-link">Quản lý Loại sản phẩm</a>
                <a href="{{route("auth.manager-manage")}}" class="manage__container__function__item btn btn-link">Quản lý Khách hàng</a>
                   <a href="{{ route('manage.order') }}" class="manage__container__function__item btn btn-link">Quản lý
                  Hóa đơn</a>
            </div>

            <table class="manage__container__table">
                <thead>
                    <th>Mã hóa đơn</th>
                    <th>Tên Khách hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Ngày nhận hàng</th>
                    <th>Tổng đơn hàng</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                            <tr>
                                <td >HĐ{{ $order->id }}</td>
                                <td >{{ $order->users->name }}</td>
                                <td >{{ $order->create_at }}</td>
                                <td >{{ $order->order_date }}</td>
                                <td >{{ number_format($order->total, 0, ',', ',')  }}</td>
                                @php
                                    $total += $order->total;
                                @endphp
                                <td><a href="{{route("manage.order-detail", ["id" => $order->id])}}" class="manage__container__table__change btn btn-primary">Chi tiết</a>
                                    
                                </td>
                            </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">
                            <strong>Tổng cộng</strong>
                        </td>
                        <td colspan="2">
                            <strong>{{ number_format($total, 0, ',', ',')  }}</strong>
                        </td>
                    
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="manage__overlay"></div>
        <div class="manage__change">
            <h3 class="manage__change__title">Bạn có muốn Thay đổi thông tin</h3>
            <form class="manage__change__content" method="POST" action="{{ route('auth.change') }}">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email-label">Email</span>
                    </div>
                    <input type="text" class="form-control disable" id="email" name="email" placeholder="Email..."
                        value="" aria-label="Email..." aria-describedby="email-label">

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name-label">Họ và tên</span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên..."
                        value="" aria-label="Họ và tên..." aria-describedby="name-label">

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name-label">Số điện thoại</span>
                    </div>
                    <input type="number" class="form-control" id="numberphone" name="numberphone"
                        placeholder="Số điện thoại ..." value="" aria-label="Số điện thoại..."
                        aria-describedby="name-label">

                </div>
                <input type="hidden" name="id" id="id" value="{{ $order->id }}">
                <div class="manage__change__confirm">
                    <button type="submit"class="manage__change__confirm__item btn btn-primary">Sửa</button>
                    <div class="manage__change__confirm__item manage-close-change-js  btn btn-primary">Hủy</div>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/manage.js') }}"></script>
@endsection
