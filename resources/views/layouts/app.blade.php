<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Process') }}</title>
    <!-- Fonts -->
    <!-- Styles -->
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="font-sans leading-normal tracking-normal">

<div class="flex md:flex-row-reverse flex-wrap">

    <!--Main Content-->
<div class="w-full md:w-full">
    <div class="container pt-8 px-6 md:pl-52 mt-10 sm:ml-10">
        {{ $slot }}
    </div>
</div>
    <!--Header-->
@include('layouts.header')

</div>
</body>
</html>
