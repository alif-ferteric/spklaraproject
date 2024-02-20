<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href={{ asset('css/bootstrap-icon.css') }}> 
    <link rel="stylesheet" href="/css/style.css">
    <title>SPK | {{ $title }}</title>
</head>
<style>
    .print-area {
        border: 1px solid red;
        padding: 1em;
        margin: 0 0 1em
    }
</style>

<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
