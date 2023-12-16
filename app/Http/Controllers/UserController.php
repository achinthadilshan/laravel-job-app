<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    // Show Register Form
    public function create()
    {
        return view('auth.register');
    }

    // Create New User
    public function store(StoreUserRequest $request)
    {
        $validatedData = $request->validated();

        // Hash password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Create user
        $user = User::create($validatedData);

        // Login
        auth()->login($user);

        return redirect(route('jobs.index'))->with('status', 'User created and Logged in successfully!');
    }
}
