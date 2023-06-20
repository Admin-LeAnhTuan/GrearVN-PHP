@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/login.css') }}">
@endsection

@section('content')
    <div class="login container">
        <h1 style="text-align: center;">Đăng nhập</h1>
        <form action="{{ route('login.user') }}" method="post" class="login__form">
            @if (Session::has("fail"))
            <div class="alert alert-danger">{{Session::get("fail")}}</div>
            @endif

            @if (Session::has("success"))
            <div class="alert alert-success">{{Session::get("success")}}</div>
            @endif

            @method('post')
            <div class="login__form__container">
                <label for="email" class="login__form__label"><i class="fa-solid fa-user"></i>Email </label>
                <input type="text" value="{{old("email")}}" id="email" name="email" placeholder="Email" class="login__form__input">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="login__form__container">
                <label for="password" class="login__form__label"><i class="fa-solid fa-lock"></i>Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Mật khẩu" class="login__form__input">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            {{csrf_field()}}
            <button type="submit" class="login__form__submit">Đăng nhập</button>
        </form>

        <div class="login__direction">
            <div class="login__direction__login">
                <a href="{{ route('login.index') }}" class="login__direction__login__link">Đăng nhập</a>
                <a href="{{ route('login.registration') }}" class="login__direction__login__link">Đăng kí</a>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/login.js') }}"></script>
@endsection
