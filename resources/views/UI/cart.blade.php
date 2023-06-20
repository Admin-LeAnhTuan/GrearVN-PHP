@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/cart.css') }}">
@endsection


@section('content')
    @include('components.cart-products')
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/cart.js') }}"></script>
@endsection
