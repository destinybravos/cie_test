<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);

        if(
        User::create([
            'username' => $request->username,
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

    public function update(Request $req){
        $uploaded = false;
        if($req->hasFile('image')){
            //get Image
            $image = $req->file('image');
            //Get the Original File Name and path
            $thumbnail = $image->getClientOriginalName();
            //Get the filename only using native php 'pathinfo'
            $filename = pathinfo($thumbnail, PATHINFO_FILENAME);
            //Extract the Extension
            $ext = strtolower($image->getClientOriginalExtension());
            //prepare the file to be stored
            $nameToStore = $filename . '_'. time() .'.'. $ext;
            //upload the file
            $image_resize = Image::make($image->getRealPath());
            // To resize the image to a width of 600 and constrain aspect ratio (auto height)
            $image_resize->resize(600,  null, function ($constraint) {
                $constraint->aspectRatio();
            });
            if($image_resize->save(public_path() . '/storage/images/profiles/'.$nameToStore )){
                $uploaded = true;
            }
        }
        $user = User::findOrFail($req->userid);
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->lga_origin = $req->lga_origin;
        $user->state_origin = $req->state_origin;
        $user->lga = $req->lga;
        $user->state = $req->state;
        $user->address = $req->address;
        $user->country = $req->country;
        if ($uploaded) {
            $user->profile_photo_path = $nameToStore;
        }
        $user->verification_status = true;
        if ($user->update()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Profile updated successfully!'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occured!'
            ]);
        }
        
    }
}
