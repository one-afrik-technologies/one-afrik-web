<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
   public function register(Request $request)
   {
    if ($request->has('is_admin') && !$request->user()->isAdmin()) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    $validatedData = $request->validate([
        'name' => 'required|max:55',
        'email' => 'email|required|unique:users',
        'password' => 'required|confirmed',
        'is_admin' => 'sometimes|boolean'
    ]);

    User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'is_admin' => $request->has('is_admin') ? true : false,
    ]);    

    return response()->json(['message' => 'User created successfully'], 201);
   }

   public function login(Request $request)
   {$credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->is_admin) {
            return response()->json(['success' => 'Login successful', 'is_admin' => true]);
        }

        return response()->json(['success' => 'Login successful']);
    }

    return response()->json(['error' => 'Invalid credentials'], 401);
   }

   public function logout()
   {
    Auth::logout();

    return response()->json(['message' => 'Logged out successfully']);
   }
}