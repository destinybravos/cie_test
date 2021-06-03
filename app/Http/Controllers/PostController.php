<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\NewsFeed;
class PostController extends Controller
{
    public function share(Request $request)
    {
        // $newsfeed = new Newsfeed;

        
        $validator = Validator::make($request->all(), [
        'content'=>'required|min:25',
        'viewstatus'=>'required',
        'feedtype'=>'required'

        ]);

        if ($validator->fails()) {
            //pass validator errors as errors object for ajax response
        return response()->json(['errors'=>$validator->errors()],422);
         }

        $newsfeed = new Newsfeed();

        $newsfeed->content = $request->content;
        $newsfeed->feedtype = $request->feedtype;
        $newsfeed->view_status = $request->viewstatus;
        $newsfeed->user_id = $request->userid;
        $newsfeed->extras = 'Extras';

        $newsfeed->save();

        return response()->json([
            'status' => 'success',
        ], 200);
    }
}
