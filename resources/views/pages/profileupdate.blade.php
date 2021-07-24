@extends('layouts.app')
@section('content')

<div class="container mt-5 ">
    <h2 class="text-center">Edit profile</h2>
    <div class="w-50 m-auto border border-4 border-light px-3">
    <form class="mt-3" action="{{ route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Change Name</label>
            <input type="text" class="form-control border border-2 border-light" name="name" value="{{ $user->name }}">
          
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control border border-2 border-light" name="username" value="{{ $user->username }}">
         
          </div>
     
        <div class="mb-3">
          <label for="profilePicture" class="form-label">Change Profile Picture</label>
          <input type="file" class="form-control border border-2 border-light" name="profilePicture">
        </div>
        <div class="mb-3 border border-2 border-light">
                
            <textarea name="body" class="ckeditor " cols="30" rows="10">No bio</textarea>
        </div>
        
  
        <div class="text-center mb-3">
            <button type="submit" class="btn btn-success">Save change</button>
        </div>
        
      </form>
    </div>
</div>
@endsection