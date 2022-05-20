<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Process') }}</title>
    <!-- Fonts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="flex md:flex-row-reverse flex-wrap">

    <!--Main Content-->
<div class="w-full md:w-full bg-gray-100">
    <div class="container bg-gray-100 pt-8 px-6 md:pl-52">
        {{ $slot }}
    </div>
</div>
    <!--Header-->
@include('layouts.header')

</div>
</body>
</html>
