<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    // 

    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
        // return $user->password;
            if (!Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records. Hash']
                ], 404);
            }
            elseif (!$user ) {
                return response([
                    'message' => ['These credentials do not match our records. user']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
             return response($response, 201);
    }
}

