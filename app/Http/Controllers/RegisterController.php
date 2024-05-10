<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'contact_no' => 'required|string|max:15',
            'terms' => 'accepted',
        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->contact_no = $request->contact_no;
        $user->save();

        // Optionally, you can automatically log in the user after registration
        // Auth::login($user);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
