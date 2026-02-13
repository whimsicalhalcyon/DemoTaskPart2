<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <link rel="preload" href="{{asset('public/assets/fonts/OpenSans.ttf')}}" as="font" type="font/ttf" crossorigin>
</head>
<body>
@include('layout.navbar')
@yield('content')
@include('layout.footer')
</body>
