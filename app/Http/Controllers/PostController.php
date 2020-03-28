<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
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

    function store(StorePostRequest $request){

        Post::create([
            'name'=>$request->name,
            'Description'=>$request->Description,
            'user_id' =>  $request->user_id,
        ]);

        return redirect()->route('post.index');
    }


    function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    } 

    public function edit()
    {
        $request = request();
        $post_id =$request->post;
        $post = Post::find($post_id);
        $users = User::all();
        return view('edit',[
            'post'=> $post,
            'users'=>$users
        ]);
    }

    public function update()
    {
        $request = request();
        $post_id =$request->post;
        Post::find($post_id )->update([
            'name' =>$request->title,
            'description'=>$request->description,
            'user_id' =>$request->user_id,
            ]);
            
            return redirect()->route('post.index');
            
        }


}
