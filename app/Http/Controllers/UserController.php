<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class UserController extends Controller
{
    public function index()
    {
        $staffAccounts = User::orderBy('full_name')->get();

        return view('accounts.users', compact('staffAccounts'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
        ]);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User account created.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:users,username,' . $user->id],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'avatar' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('avatar')) {
            $imageManager = new ImageManager(new Driver());
            $thumbnail = $imageManager->read($request->file('avatar')->getPathname());
            $thumbnail->cover(240, 240);

            $avatarPath = 'avatars/' . Str::uuid() . '.jpg';
            Storage::disk('public')->put($avatarPath, (string) $thumbnail->toJpeg(85));
            $validated['avatar'] = $avatarPath;
        }

        unset($validated['avatar']);
        if (isset($avatarPath)) {
            $validated['avatar'] = $avatarPath;
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User account updated.');
    }
}
