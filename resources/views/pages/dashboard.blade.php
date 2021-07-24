@extends('layouts.app')
@section('content')
<div class="container mt-5">
  <h2 class="text-center">Recent Posts</h2>
  <hr>
  <div class="mb-4 text-center">
    <a href="{{ route('post.create') }}" class="btn btn-success">Create Post</a>
    
  </div>
  <div class="d-inline bg-primary">
    @if($posts->count() == 0)
        <h2>There are no posts.....</h2>
    @else
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
              <h3 class="card-title"><a class="thuziak" href="{{ route('post.show', $post ) }}">{{$post->title }}</a></h3>
              <p class="card-text">{!! $post->body !!}</p>
              <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
          @else
          <div class="card mb-3 border border-light">
            <div class="border-bottom border-light py-4 d-flex justify-content-end p-4">
              <p class="card-text">Author: {{ $post->user->username }}</p>
            </div>
            <div class="card-body bg-light thuziak">
              <h3 class="card-title"><a href="{{ route('post.show', $post ) }}">{{$post->title}}</a></h3>
              <p class="card-text">{!! $post->body !!}</p>
              <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
          @endif
          
        @endforeach
        @endif
        <div class="d-flex justify-content-center">
          {!! $posts->links('pagination::bootstrap-4') !!}
      </div>
  
  </div>
</div>
@endsection
