<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Counterboard POS' }}</title>
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
</head>
<body>
    <header class="topbar">
        <div class="header-info">
            <div class="student-name">Eirhiz Jericko Maniego</div>
            <a class="brand" href="{{ route('home') }}">COUNTERBOARD <span>POS</span></a>
        </div>
        <nav class="nav-links" aria-label="Main navigation">
            <a class="{{ request()->routeIs('home') ? 'current' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="{{ request()->routeIs('about') ? 'current' : '' }}" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('customers.*') ? 'current' : '' }}" href="{{ route('customers.index') }}">Customers</a>
            <a class="{{ request()->routeIs('users.*') ? 'current' : '' }}" href="{{ route('users.index') }}">Users</a>
            @auth
                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf
                    <button type="submit" class="nav-button">Log out</button>
                </form>
            @else
                <a class="{{ request()->routeIs('login') ? 'current' : '' }}" href="{{ route('login') }}">Log in</a>
                <a class="{{ request()->routeIs('register') ? 'current' : '' }}" href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <main class="page-shell">
        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif
        @yield('content')
    </main>

</body>
</html>
