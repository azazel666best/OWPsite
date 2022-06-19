<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}" type="text/css">
{{--    <link rel="stylesheet" href="/css/@yield('css').css" type="text/css">--}}


</head>
<body>
    @yield('content')
</body>
</html>
