<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        @auth
            <a href="{{ route('admin.dashboard') }}">Admin</a>
        @else
            <a href="{{ route('login') }}">Admin login</a>
        @endauth
    </header>
    <main class="page-shell">@yield('content')</main>
</body>
</html>
