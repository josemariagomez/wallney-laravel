<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\AuthResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {            
            $username = $request->get('email');
            $password = $request->get('password');
            
            $field = filter_var($username,FILTER_VALIDATE_EMAIL)? 'email': 'username';

            if (!Auth::attempt([$field => $username,'password' => $password])) {
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized'
                ]);
            }
            $user = User::all()->where($field, $username)->first();

            if ( ! Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    public function register(RegisterRequest $request) 
    {         
        $input = $request->validated();
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input);
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return (new AuthResource($user))->response()->setStatusCode(200);
        return response()->json([
            'status_code' => 200,
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }
}
