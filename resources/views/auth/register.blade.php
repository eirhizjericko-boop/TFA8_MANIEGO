@extends('layouts.app')

@section('content')
    <section class="form-card">
        <p class="eyebrow">NEW STAFF ACCOUNT</p>
        <h1>Register</h1>
        <p class="intro">Create a login before managing customer and staff records.</p>

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="account-form">
            @csrf
            <label for="username">Username</label>
            <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus>

            <label for="full_name">Full name</label>
            <input id="full_name" type="text" name="full_name" value="{{ old('full_name') }}" required>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>

            <button type="submit" class="primary-button">Create account</button>
        </form>
    </section>
@endsection
