@extends('layouts.public')

@section('title', config('app.name'))

@section('content')
    <section class="panel">
        <p class="eyebrow">Website foundation</p>
        <h1>{{ config('app.name') }}</h1>
        <p>The public website is being prepared. Laundry services and business information will be added in a future milestone.</p>
    </section>
@endsection
