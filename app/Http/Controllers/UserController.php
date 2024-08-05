<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $req ){
        $req->validate([
            'name' =>'required|string|max:20|alpha',
            'email' =>'required|string|email|unique:users',
            'password' => [
                'required',
                'string',
                'confirmed', // Must match the password field
                'min:8', // Minimum length of 8 characters
                'regex:/[a-z]/', // At least one lowercase letter
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/', // At least one digit
                'regex:/[@$!%*?&]/', // At least one special character
            ],
            'role' => 'required|string|in:student,teacher,parent,user',
        ],[
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be a string.',
            'name.alpha' => 'The name must only contain alphabetic characters.',
            'name.max' => 'Name cannot be more than 20 characters.',
            'email.required' => 'Email is required.',
            'email.string' => 'Email must be a string.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email already exists.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
            'password.confirmed' => 'Passwords do not match.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.regex' => 'Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.',

        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role,
        ]);

        return redirect()->route('login');
    }

    public function login(Request $req){
        $data = $req->validate([
            'email' =>'required|string|email',
            'password' => [
                'required',
                'string',
                'min:8', // Minimum length of 8 characters
                'regex:/[a-z]/', // At least one lowercase letter
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/', // At least one digit
                'regex:/[@$!%*?&]/', // At least one special character
            ],
        ],[
            'email.required' => 'Email is required.',
            'email.string' => 'Email must be a string.',
            'email.email' => 'Email must be a valid email address.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.regex' => 'Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.',
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }
    
}
