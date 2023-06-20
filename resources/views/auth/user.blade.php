@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/user.css') }}">
@endsection
@section('content')
    <div class="user">
        <div class="user__container container">
            <span class="text-danger">
                @error('numberphone')
                    {{ $message }}
                @enderror

                @error('email')
                    {{ $message }}
                @enderror
                @error('address')
                    {{ $message }}
                @enderror
            </span>

            <span class="text-success">
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @endif
            </span>
            <table class="user__container__table">
                <thead>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Chức năng</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a class="user__container__table__change btn btn-primary">Sửa</a>
                            <a class="user__container__table__logout btn btn-danger">Đăng xuất</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="user__overlay"></div>
        <div class="user__logout">
            <h3 class="user__logout__title">Bạn có muốn thoát ?</h3>
            <h4 class="user__logout__content">Bạn sẽ đăng xuất và trở lại trang đăng nhập</h4>
            <div class="user__logout__confirm">
                <a href="{{ route('auth.logout') }}" class="user__logout__confirm__item btn btn-danger">OK</a>
                <a class="user__logout__confirm__item user-close-js  btn btn-primary">Hủy</a>
            </div>
        </div>

        <div class="user__change">
            <h3 class="user__change__title">Bạn có muốn Thay đổi thông tin</h3>
            <form class="user__change__content" method="POST" action="{{ route('auth.change') }}">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email-label">Email</span>
                    </div>
                    <input type="text" class="form-control disable" id="email" name="email" placeholder="Email..."
                        value="{{ $user->email }}" aria-label="Email..." aria-describedby="email-label">

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name-label">Họ và tên</span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên..."
                        value="{{ $user->name }}" aria-label="Họ và tên..." aria-describedby="name-label">

                </div>

                @if (!Session::has('admin'))
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">Số điện thoại</span>
                        </div>
                        <input type="text" class="form-control" id="numberphone" name="numberphone"
                            placeholder="Họ và tên..." value="{{ $user->numberphone }}" aria-label="Số điện thoại..."
                            aria-describedby="name-label">

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">Địa chỉ</span>
                        </div>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Họ và tên..."
                            value="{{ $user->address }}" aria-label="Địa chỉ..." aria-describedby="name-label">

                    </div>
                @endif
                <div class="user__change__confirm">
                    <button type="submit"class="user__change__confirm__item btn btn-primary">Sửa</button>
                    <div class="user__change__confirm__item user-close-change-js  btn btn-primary">Hủy</div>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/user.js') }}"></script>
@endsection
