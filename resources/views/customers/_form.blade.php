<label for="full_name">Full name</label>
<input id="full_name" name="full_name" type="text" value="{{ old('full_name', $customer->full_name ?? '') }}">
@error('full_name')<small class="error-message">{{ $message }}</small>@enderror

<label for="email">Email</label>
<input id="email" name="email" type="email" value="{{ old('email', $customer->email ?? '') }}">
@error('email')<small class="error-message">{{ $message }}</small>@enderror

<label for="phone">Phone</label>
<input id="phone" name="phone" type="text" value="{{ old('phone', $customer->phone ?? '') }}">
@error('phone')<small class="error-message">{{ $message }}</small>@enderror
