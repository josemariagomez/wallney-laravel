<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

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
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users', 
            'password' => 'required', 
            'password_confirmation' => 'required|same:password', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $validator->validated();
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input);
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status_code' => 200,
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }
}
