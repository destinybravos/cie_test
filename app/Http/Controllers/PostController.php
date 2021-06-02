<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function share(Request $request)
    {
        // $newsfeed = new Newsfeed;


        return response()->json([
            'status' => 'success',
            'testdata' => $request->content
        ], 200);
    }
}
