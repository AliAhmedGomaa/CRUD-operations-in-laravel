<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    function index(){
        $posts = Post::all();

        return view('index' , [
            'posts' => $posts
        ]);
    }

    function show(){
        $request = request();
        $requestId = $request->post;

        $post = Post::find($requestId);

        return view('show',[
            'post'=>$post
        ]
        );
    }

    function create(){
        return view('form');
    }

    function store(){

        $request = request();
        Post::create([
            'name'=>$request->title,
            'Description'=>$request->Description,
            'user_id' =>  $request->user_id,
        ]);
            // dd($request);
        return redirect()->route('post.index');

    }
}
