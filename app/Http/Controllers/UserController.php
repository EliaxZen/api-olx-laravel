<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(CreateUserRequest $request): JsonResponse
    {
        // Register user in database
        $data = $request->only(['name', 'email', 'password', 'state_id']);
        $user = User::create($data);
        $data['password'] = Hash::make($data['password']);
        $response = [
            'error' => '',
            'user' => $user->createToken('Register_token')->plainTextToken
        ];

        return response()->json($response);
    }
    public function signin(): JsonResponse
    {
        return response()->json(['method' => 'signin']);
    }
    public function me(): JsonResponse
    {
        return response()->json(['method' => 'me']);
    }
}
