<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') · {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('admin.dashboard') }}">{{ config('app.name') }} Admin</a>
        <div class="header-actions">
            <span>{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="button button-secondary" type="submit">Log out</button>
            </form>
        </div>
    </header>
    <main class="page-shell">@yield('content')</main>
</body>
</html>
