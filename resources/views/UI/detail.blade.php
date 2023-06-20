@extends('clients')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/clients/css/detail.css') }}">
@endsection


@section('content')
    @include('components.detail-product')
@endsection


@section('js')
    <script src="{{ asset('assets/clients/js/detail.js') }}"></script>
@endsection
