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

    // Show Login Form
    public function login() {
        return view('auth.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $validatedData = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(auth()->attempt($validatedData)) {
            $request->session()->regenerate();

            return redirect(route('jobs.index'))->with('status', 'You\'re logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('jobs.index'))->with('status', 'You have been logged out successfully!');
    }
}
