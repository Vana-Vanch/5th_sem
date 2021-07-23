@extends('layouts.app')
@section('content')
<div class="container-fluid mt-2">
    <div class="container border border-light border-3 rounded">
        <div class="mt-3">
            <h2 class="text-center">Create a Post</h2>
            <form class="mt-3 mb-3" action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control border border-3 border-light" name="title">
                  
                </div>
              
                <div class="mb-3">
                  <label for="file" class="form-label">Attach a photo</label>
                  <input type="file" class="form-control border border-3 border-light" name="file">
                </div>
                <div class="mb-3 border border-3 border-light">
                
                    <textarea name="body" class="ckeditor " cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Post</button>
              </form>
        </div>
    </div>
</div>

<div class="container mt-5">
  <h2 class="text-center">Recent Posts</h2>
  <hr>
  <div class="d-inline bg-primary">
        @foreach ($posts as $post)
          @if($post->blog_image)
          <div class="card mb-3 border border-light">
            <div class="border-bottom border-light py-4 d-flex justify-content-end p-4">
              <p class="card-text">Author: {{ $post->user->username }}</p>
            </div>
            <div class="h-50 d-inline-block text-center">
              <img src="{{ asset('images/blog/'.$post->blog_image) }}" class="card-img-top img-fluid" alt="{{ $post->blog_image }}" style="height: 26rem; width:40rem;">
            </div>
            <div class="card-body bg-light thuziak">
              <h3 class="card-title">{{$post->title}}</h3>
              <p class="card-text">{!! $post->body !!}</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          @else
          <div class="card mb-3 border border-light">
            <div class="border-bottom border-light py-4 d-flex justify-content-end p-4">
              <p class="card-text">Author: {{ $post->user->username }}</p>
            </div>
            <div class="card-body bg-light thuziak">
              <h3 class="card-title">{{$post->title}}</h3>
              <p class="card-text">{!! $post->body !!}</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          @endif
        @endforeach
        <div class="d-flex justify-content-center">
          {!! $posts->links() !!}
      </div>
  
  </div>
</div>
@endsection
