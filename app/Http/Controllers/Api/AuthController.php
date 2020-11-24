<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest)
    {
        if (Auth::attempt(['email' => $loginRequest->email, 'password' => $loginRequest->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('PodcastApp')->accessToken;
            $success['name'] = $user->name;

            return response()->json(['success' => $success], 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function register(RegisterRequest $registerRequest)
    {
        $user = User::create([
            'name' => $registerRequest->name,
            'email' => $registerRequest->email,
            'username' => $registerRequest->username,
            'password' => Hash::make($registerRequest->password)
        ]);

        if ($user) {
            $success['token'] = $user->createToken('PodcastApp')->accessToken;
            $success['name'] = $user->name;

            return response()->json(['success' => $success], 201);
        }
        return response()->json(['error' => 'Failed to register a user'], 500);
    }
}
