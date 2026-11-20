@extends('layouts.app', ['title' => 'Counterboard POS | Edit User'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">USER ACCOUNTS / EDIT</p>
    <h1>Edit user</h1>
    <p>Update the account and optionally upload a profile picture.</p>
</section>
<form class="account-form" method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('users._form')
    <label for="avatar">Profile picture</label>
    <input id="avatar" name="avatar" type="file" accept="image/*">
    <small class="form-note">Image files only, maximum 2MB. The image is prepared as a square thumbnail before storage.</small>
    @error('avatar')<small class="error-message">{{ $message }}</small>@enderror
    <button class="button" type="submit">Update user</button>
</form>
@endsection
