<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use  App\Http\Controllers\ApiResponseController;

class UserAuthController extends ApiResponseController
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6',
            ]);
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error', $e->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('AuthToken')->plainTextToken;

        return $this->sendResponse(['token' => $token], 'User registered successfully.');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return $this->sendError('Unauthorized', ['error' => 'Invalid credentials'], 401);
        }
        $user = auth()->user();
        $token = $user->createToken('AuthToken')->plainTextToken;
        return $this->sendResponse(['token' => $token], 'User logged in successfully.');
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            "message" => "logged out"
        ]);
    }
}
