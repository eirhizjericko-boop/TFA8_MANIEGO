<label for="username">Username</label>
<input id="username" name="username" type="text" value="{{ old('username', $user->username ?? '') }}">
@error('username')<small class="error-message">{{ $message }}</small>@enderror

<label for="full_name">Full name</label>
<input id="full_name" name="full_name" type="text" value="{{ old('full_name', $user->full_name ?? '') }}">
@error('full_name')<small class="error-message">{{ $message }}</small>@enderror

<label for="email">Email</label>
<input id="email" name="email" type="email" value="{{ old('email', $user->email ?? '') }}">
@error('email')<small class="error-message">{{ $message }}</small>@enderror
