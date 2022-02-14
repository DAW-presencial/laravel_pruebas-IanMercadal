<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AuthController extends Controller
{
    public function register (Request $request) {
        $fields = $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|string|unique:users,email',
            'password'=> 'required|string|confirmed',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login (Request $request) {
        $fields = $request->validate([
            'email'=> 'required|string',
            'password'=> 'required|string',
        ]);

        // Comporbar Email
        $user = User::where('email', $fields['email'])->first();

        if(!$user || !Hash::check($fields['password'],$user->password)) {
            return response([
                'message' => 'Bad Creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request, User $user) {
       $user->tokens()->delete();

        return [
            'message' => 'Log Out'
        ];
    }
}
