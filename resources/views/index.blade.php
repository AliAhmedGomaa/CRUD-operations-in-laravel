@extends('layout.app')

@section('title')
Main Page
@endsection

@section('content')
    <div class="container mx-auto text-center">
    <a href="{{route('post.create',[])}}" class="btn btn-success mx-auto my-4"> Create Post </a>
        <table class="table mb-4">
            <thead>
              <tr>
                <th scope="col">Post id</th>
                <th scope="col">Title</th>
                <th scope="col">Posted by</th>
                <th scope="col">Created At</th>
                <th colspan="3" scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>

               @foreach ($posts as $post)
                <tr>
                    <td scope="col"># {{$post->id}}</td>
                    <td scope="col">{{$post->name}}</td>
                    <td scope="col">{{$post-> user_id}}</td>
                    <td scope="col">{{$post-> created_at}}</td>
                    <td class="mx-0 p-0"><a href="{{route('post.show' , ['post' => $post->id])}}" class="btn px-3 btn-success" href=""> view </a></td>
                    <td class="mx-0 p-0"><a href="" class="btn px-3 btn-primary" href=""> Edit </a></td>
                    <td class="mx-0 p-0"><a href="" class="btn px-3 btn-danger" href=""> Delete </a></td>

                </tr>
                @endforeach
            </tbody>
          </table>

    </div>
@endsection


