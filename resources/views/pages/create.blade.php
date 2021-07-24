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
@endsection