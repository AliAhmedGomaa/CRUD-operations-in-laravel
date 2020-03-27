
@extends('layout.app')

@section('title')
Post
@endsection

@section('content')

<div style="width:800px" class="container my-5">
<form method="POST" action="{{route('post.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Post Title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

      <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea name = "Description"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>

  @endsection
