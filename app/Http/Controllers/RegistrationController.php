<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import your User model
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    // Method to show the registration form
    public function showForm()
    {
        return view('agents.regst'); // Path to your form view
    }

    // Method to handle form submission
    public function register(Request $request)
    {
        // Validate the form input
        $request->validate([
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'userAccountTypeRadio' => 'required',
        ]);

        // Create a new user in the database
        $user = User::create([
            'first_name' => $request->input('firstName'),
            'middle_name' => $request->input('middleName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phoneNumber'),
            'password' => Hash::make($request->input('password')),
            'account_type' => $request->input('userAccountTypeRadio'),
        ]);

        // Redirect to a success page or return a response
        return redirect()->route('register.form')->with('success', 'Account created successfully.');
    }
}

