<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Show login form
    public function login() {
        return view('users.login');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->with('info', 'You have been logged out');

    }

    // Authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            if(auth()->user()->role == 'ADMIN' ||
                auth()->user()->role == 'AUTHOR') {
                return redirect()->route('dashboard.index');
            }
            else if(auth()->user()->role == 'READER') {
                if(isset($request->post)) {
                    return redirect()->route('posts.single', request('post'));
                } else {
                    return redirect()->route('posts.index');
                }
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Show form to create user
    public function create() {
        return view('users.create');
    }

    // Store user data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'role' => 'required',
            'bio' => ''
        ]);

        $user = User::create($formFields);

        return redirect()->route('users.edit', $user)
            ->with('info', 'User has been created successfully');
    }

    // Show form to edit user
    public function edit(User $user) {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    // Update user data
    public function update(Request $request, User $user) {
        $formFields = $request->validate([
            'name' => 'required',
            'firstname' => '',
            'lastname' => '',
            'bio' => '',
            'email' => 'required|email',
            'role' => ''
        ]);

        $user->update($formFields);
        return back()->with('info', 'User has been updated successfully');
    }

    // Delete user
    public function destroy(User $user) {
        $user->delete();
        return back()->with('info', 'User has been deleted successfully');
    }

    // user profile
    public function profile() {
        return view('users.profile', [
            'user' => User::find(auth()->user()->id)
        ]);
    }
}
