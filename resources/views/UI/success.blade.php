@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/success.css') }}">
@endsection


@section('content')
    <div class="success">
        <div class="success__container container">
            <div class="success__container__header">
                <i class="fa-solid fa-check"></i>
                <div class="success__container__header__title">
                    Thanh toán thành công!
                </div>
            </div>


            <div class="success__container__content">
                <div class="success__container__content__text">Nhân viên của chúng tôi sẽ liên hệ bạn để xác nhận. Cảm ơn Quý
                    khách đã sử dụng dịch vụ của chúng tôi</div>
                <div class="success__container__content__back"> <a href="{{ route('home') }}">Quay về mua hàng</a></div>
            </div>


        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/success.js') }}"></script>
@endsection
