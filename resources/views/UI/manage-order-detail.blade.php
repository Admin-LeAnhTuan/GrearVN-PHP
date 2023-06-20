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
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành giá</th>
                    {{-- <th>Chức năng</th> --}}
                </thead>
                <tbody>
                    @foreach ($orderDetails as $orderDetail)
                            <tr>
                                <td ><a href="{{route("products.detail", ["title" => $orderDetail->products->title])}}"><strong>{{ $orderDetail->products->title }}</strong></a></td>
                                <td >{{ $orderDetail->amount }}</td>
                                <td >{{ number_format($orderDetail->price, 0, ',', ',')  }}</td>
                                {{-- <td><a class="manage__container__table__change btn btn-primary">Sửa</a>
                                    <a class="manage__container__table__logout btn btn-danger">Xóa</a>
                                </td>
                                <input type="hidden" class="manage__container__table__id"
                                    name="user__id__{{ $orderDetail->id }}" id="user__id__{{ $orderDetail->id }}"
                                    value="{{ $orderDetail->id }}">
                                <div class="manage__logout">
                                    <h3 class="manage__logout__title">Bạn có muốn xóa sản phẩm này ?</h3>
                                    <h4 class="manage__logout__content">Sản phẩm này sẽ biến mất vĩnh viễn</h4>
                                    <div class="manage__logout__confirm">
                                        <a href="{{ route('manage.delete-product', ['id' => $orderDetail->id]) }}"
                                            class="manage__logout__confirm__item btn btn-danger">Xóa</a>
                                        <a class="manage__logout__confirm__item manage-close-js  btn btn-primary">Hủy</a>
                                    </div>
                                </div> --}}
                            </tr>
                    @endforeach
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
                <input type="hidden" name="id" id="id" value="{{ $orderDetail->id }}">
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
