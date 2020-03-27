@extends('layout.app')

@section('title')
Post
@endsection

@section('content')



    <div class="card mx-auto my-5 width text-center" style="width: 30rem;">
        <div class="card-body">
          <h3 class="card-title">{{ $post->name }}</h3>
        <p class="card-text">{{ $post->description }}</p>
        </div>
      </div>



@endsection
