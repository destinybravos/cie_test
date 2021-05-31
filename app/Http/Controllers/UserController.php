<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'firstname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if(
        User::create([
            'firstname' => $request->firstname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ])){
            return response()->json([
                'status' => 'success',
                'message' => 'User registration successful!'
            ], 200);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'An error occured while trying to register new user!'
            ], 200);
        }
           
    }
}
