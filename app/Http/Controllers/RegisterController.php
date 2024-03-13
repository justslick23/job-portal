<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {

          // Assuming you want to default to 'employer' type
    $userType = 'employer';
    
    return view('auth.register', compact('userType'));
   
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'user_type' => 'required|string|in:employer,jobseeker', // Validate user type
        ]);

        // Create the user
        $user = User::create([
            'firstname' => $validatedData['name'],
            'lastname' => $validatedData['surname'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['user_type'], // Set role based on user type
        ]);

        // Redirect the user after registration
        return redirect()->route('home')->with('success', 'Registration successful. Please login.');
    }
}
