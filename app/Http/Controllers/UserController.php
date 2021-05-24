<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if(
        Student::create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'age' => $request->age,
            'password' => Hash::make($request->password)
        ])){
            return response()->json([
                'status' => 'success',
                'message' => 'Student registration success!'
            ], 200);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'An error occured while trying to register new student!'
            ], 200);
        }
           
    }
}
