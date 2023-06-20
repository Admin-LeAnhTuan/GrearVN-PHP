@extends('clients')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home.css') }}">
@endsection

@section('content')
    @if (Session()->has('success'))
        {{ Session()->pull('listProductId') }}
    @endif
    @include('components.banner')
    <x-featured-product title="Những {{$category}} tìm thấy" name="{{ $category }}" amount="{{100}}"></x-featured-product>
@endsection
@section('js')
    <script src="{{ asset('assets/clients/js/home.js') }}"></script>
@endsection
