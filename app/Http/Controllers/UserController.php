<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\SigInRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;

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
    public function signin(SigInRequest $request): JsonResponse
    {
        $data = $request->only(['email', 'password']);
        if(Auth::attempt($data)){
            $user = Auth::user();
                $response = [
                    'error' => '',
                    'token' => $user->createToken('Login_token')->plainTextToken
                ];
            return response()->json($response);
        };
        return response()->json(['error' => 'Usuário ou senha inválidos']);
    }
    public function me(Request $request): JsonResponse
    {
        $user = Auth::user();
        $response = [
            'name' => $user->name,
            'email' => $user->email,
            'state' => $user->state->name,
            'ads' => $user->advertises
        ];
        return response()->json($response);
    }
}
