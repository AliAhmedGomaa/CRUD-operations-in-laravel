<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
 
    function index(){
        return PostResource::collection(Post::with('User')->paginate(2));
    }

    function show($post){
        return new PostResource(
            Post::find($post)
        );
    }

    public function store(StorePostRequest $request)
    {
        return new PostResource(
            Post::create([
                'name'=>$request->name,
                'Description'=>$request->Description,
                'user_id' =>  $request->user_id,
            ])
        ); 
    }
    
}
