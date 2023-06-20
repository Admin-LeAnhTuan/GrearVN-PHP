<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web CNPM</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/app.css') }}">
    @yield('css')
</head>

<body>
    <x-header/>
    @yield('content')

    @include('components.footer')
    <script src="{{ asset('assets/clients/js/app.js') }}"></script>
    @yield('js')

</body>

</html>
