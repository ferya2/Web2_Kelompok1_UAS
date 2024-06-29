<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        // Return your registration view
        return view('user.register');
    }

    public function storeRegister(Request $request)
    {
        // Check if the email already exists
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // Redirect back with error message using session
            return redirect('/user/register')->with('account_exists', true);
        }

        // Create new user if email doesn't exist
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user',
        ];

        User::create($user);

        // Set success message for redirect
        return redirect('/user/login')->with('success_message', 'Registration successful. Please login.');
    }




    public function login()
    {
        // Return your login view
        return view('user.login');
    }

    public function loginAuth(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if (auth()->user()->role == 'admin') {
                // Redirect admin to dashboard
                return redirect()->intended('/dashboard');
            } else {
                // Redirect non-admin users to their respective dashboard or homepage
                return redirect()->intended('/dashboard');
            }
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
