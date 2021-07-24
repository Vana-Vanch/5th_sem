@extends('layouts.app')
@section('content')
<div class="container">
@if($post->blog_image)

<div class="card mb-3 border border-light">
  <div class="border-bottom border-light py-4 d-flex justify-content-end p-4">
    <p class="card-text">Author: {{ $post->user->username }}</p>
  </div>
  <div class="h-50 d-inline-block text-center">
    <img src="{{ asset('images/blog/'.$post->blog_image) }}" class="card-img-top img-fluid" alt="{{ $post->blog_image }}" style="height: 26rem; width:40rem;">
  </div>
  <div class="card-body bg-light thuziak">
    <h3 class="card-title"><a href="{{ route('post.show', $post ) }}">{{$post->title}}</a></h3>
    <p class="card-text">{!! $post->body !!}</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    @if($post->user_id === Auth::user()->id)
    <form action="{{ route('post.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-info">
    </form>
    @endif
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
    <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans() }}</small></p>
    @if($post->user_id === Auth::user()->id)
    <form action="{{ route('post.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-info">
    </form>
    @endif
  </div>
</div>
</div>
@endif
@endsection