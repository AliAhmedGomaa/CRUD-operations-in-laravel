@extends('layouts.app')

@section('title')
Main Page
@endsection

@section('content')
    <div class="container mx-auto text-center">
    <a href="{{route('post.create')}}" class="btn btn-success mx-auto my-4"> Create Post </a>
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
                    <td scope="col">{{ $post->user ? $post->user->name : "Not exist" }}</td>
                    <td scope="col">{{$post-> created_at}}</td>
                    <td class="mx-0 p-0"><a href="{{route('post.show' , ['post' => $post->id])}}" class="btn px-3 btn-success" href=""> view </a></td>
                    <td class="mx-0 p-0"><a href="" class="btn px-3 btn-primary" href=""> Edit </a></td>
                  
                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      Delete
                    </button></td>
                  </tr>
                @endforeach
            </tbody>
          </table>


          
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are You SUre You Want To Delete?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  @foreach ($posts as $post)
                  <form method="post" action="{{route('post.destroy',  ['post' => $post->id])}}">
                    @csrf
                    
                    @endforeach

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes Delete</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection


