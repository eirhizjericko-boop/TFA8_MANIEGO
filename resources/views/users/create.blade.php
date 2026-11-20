@extends('layouts.app', ['title' => 'Counterboard POS | Create User'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">USER ACCOUNTS / NEW</p>
    <h1>Create a user</h1>
    <p>The username must be unique.</p>
</section>
<form class="account-form" method="POST" action="{{ route('users.store') }}">
    @csrf
    @include('users._form')
    <button class="button" type="submit">Save user</button>
</form>
@endsection
