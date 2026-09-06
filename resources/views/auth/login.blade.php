@extends('layouts.public')

@section('title', 'Admin login')

@section('content')
    <section class="panel panel-narrow">
        <p class="eyebrow">Internal access</p>
        <h1>Admin login</h1>
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <label for="email">Email address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
            @error('email')
                <p class="form-error">{{ $message }}</p>
            @enderror
            <label for="password">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required>
            @error('password')
                <p class="form-error">{{ $message }}</p>
            @enderror
            <label class="checkbox-label" for="remember">
                <input id="remember" name="remember" type="checkbox" value="1">
                Remember me
            </label>
            <button class="button" type="submit">Log in</button>
        </form>
    </section>
@endsection
