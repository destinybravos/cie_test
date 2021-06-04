<?php

namespace App\Http\Controllers;

use App\Models\NewsFeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function share(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'content'=>'required|min:8',
            'viewstatus'=>'required',
            'feedtype'=>'required'
        ]);

        if ($validator->fails()) {
            //pass validator errors as errors object for ajax response
            // return response()->json(['errors'=>$validator->errors()],422);

            return response()->json([
                'status' => 422,
                'errors'=>$validator->errors()
            ], 200);
         }

        $newsfeed = new Newsfeed();
        $newsfeed->content = $request->content;
        $newsfeed->feedtype = $request->feedtype;
        $newsfeed->view_status = $request->viewstatus;
        $newsfeed->user_id = $request->userid;
        $newsfeed->extras = 'Extras';

        if($newsfeed->save()){
            return response()->json([
                'status' => 200,
                'success'=>'post shared'
            ]);
        }else{
            return response()->json([
                'status' => 422,
                'errors'=>'Could not save post'
            ], 200);
        }
    }

    public function fetchfeeds(Request $request)
    {
        $feeds = Newsfeed::orderBy('created_at', 'DESC')->get();
        foreach ($feeds as $feed) {
            $feed->publisher = $feed->publisher;
        }
        return response()->json([
            'status' => 200,
            'feeds'=> $feeds
        ], 200);
    }
}
