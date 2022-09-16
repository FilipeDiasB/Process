<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <script src="https://cdn.tailwindcss.com"></script>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

@include('layouts.header')

<body class="font-sans leading-normal tracking-normal bg-gray-50">
<!--Main Content-->
<div id="app" class="flex">
    <div id="content" class="bg-white container rounded overflow-hidden shadow-md border-black border-t-2 p-3 md:ml-56 md:mr-16 md:mt-32 mt-36 mb-32">
        {{ $slot }}
    </div>
</div>
</body>
</html>

