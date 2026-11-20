@extends('layouts.app')

@section('content')
    <section class="form-card">
        <p class="eyebrow">SECURE ACCESS</p>
        <h1>Log in</h1>
        <p class="intro">Use your staff email and password to manage the POS accounts.</p>

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="account-form">
            @csrf
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <label class="check-row">
                <input type="checkbox" name="remember" value="1">
                Remember me
            </label>

            <button type="submit" class="primary-button">Log in</button>
        </form>
    </section>
@endsection
