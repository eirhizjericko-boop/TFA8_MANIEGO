@extends('layouts.app', ['title' => 'Counterboard POS | Home'])

@section('content')
<section class="hero-panel">
    <p class="eyebrow">IT0049 · WEB SYSTEM TECHNOLOGIES</p>
    <h1>A small POS workspace<br><span>ready for the next sale.</span></h1>
    <p class="hero-copy">Counterboard is a beginner-friendly Laravel foundation that keeps the important pieces visible: routes, controllers, Blade views, and database records.</p>
    <a class="button" href="{{ route('customers.index') }}">View customer accounts <span>→</span></a>
</section>

<section class="quick-grid" aria-label="Application sections">
    <a class="quick-card coral" href="{{ route('customers.index') }}"><strong>01</strong><span>Customer accounts</span><small>Five sample records</small></a>
    <a class="quick-card blue" href="{{ route('users.index') }}"><strong>02</strong><span>User accounts</span><small>Five staff profiles</small></a>
    <a class="quick-card yellow" href="{{ route('about') }}"><strong>03</strong><span>About the build</span><small>See the MVC map</small></a>
</section>
@endsection
