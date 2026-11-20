@extends('layouts.app', ['title' => 'Counterboard POS | Users'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY / STAFF</p>
    <h1>User accounts</h1>
    <p>User records are retrieved through the <code>User</code> Eloquent model. Each account can be edited with a prepared avatar.</p>
</section>

<div class="page-actions"><a class="button" href="{{ route('users.create') }}">Create user</a></div>
<div class="account-table">
    <div class="table-row table-head"><span>Avatar</span><span>Username</span><span>Full name</span><span>Action</span></div>
    @foreach ($staffAccounts as $staff)
        <div class="table-row">
            <img class="avatar" src="{{ $staff->avatar ? \Illuminate\Support\Facades\Storage::disk('public')->url($staff->avatar) : asset('images/avatar-placeholder.svg') }}" alt="Avatar for {{ $staff->full_name }}">
            <span class="person-name">{{ $staff->username }}</span>
            <span>{{ $staff->full_name }}</span>
            <a class="edit-link" href="{{ route('users.edit', $staff) }}">Edit</a>
        </div>
    @endforeach
</div>
@endsection
