@extends('clients')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home.css') }}">
@endsection

@section('content')
    @if (Session()->has('success'))
        {{ Session()->pull('listProductId') }}
    @endif
    @include('components.banner')
   
    <div class="featured">
        <div class="featured__container container ">
            <div class="featured__container__header">
                <h2 class="featured__container__header__title">
                    {{ $title }}
                </h2>
                <a href="{{ route('search.category-name', ['category' => $title]) }}"
                    class="featured__container__header__more">
                    xem thêm
                </a>
            </div>

            <div class="featured__container__wrapper ">
                <div class="featured__container__wrapper__list">
                    {{-- Item --}}
                    @foreach ($products as $product)
                        <a href="{{ route('products.detail', ['title' => $product->title]) }}"
                            class="featured__container__wrapper__list__item">
                            <img src="{{ $product->thumbnail }}" alt="">
                            <div class="featured__container__wrapper__list__item__more">
                                <h6>Click để xem chi tiết</h6>

                            </div>
                            <div class="featured__container__wrapper__list__item__content">
                                <div class="featured__container__wrapper__list__item__title">{{ $product->title }}</div>
                                <div class="featured__container__wrapper__list__item__price">
                                    {{ number_format($product->price, 0, ',', ',') }} </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/clients/js/home.js') }}"></script>
@endsection
