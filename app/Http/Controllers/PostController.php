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
        $users = User::all();
        
        return view('create',[
            'users' => $users
        ]);
    }

    function store(){

        $request = request();

        Post::create([
            'name'=>$request->title,
            'Description'=>$request->Description,
            'user_id' =>  $request->user_id,
        ]);
            
        return redirect()->route('post.index');
    }

    function destroy(Post $post){
        // $request = request();
        
        // $postId = $request->post;

            $post->delete();
            // dd($post);
        // dd($postId);
        // Post::find($postId)->delete(); 

        return redirect()->route('post.index');

        // Post::destroy($postToDelete);

    } 


}
