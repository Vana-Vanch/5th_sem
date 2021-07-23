@extends('layouts.bg')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Register</h1>
        <div class="w-50 m-auto">
        <form class="mt-3 thuziak" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name')
                border border-danger border-3 rounded-2
                @enderror" name="name">
                @error('name')
                  {{ $message }}
                @enderror
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username')
                border border-danger border-3 rounded-2
                @enderror" name="username">
                @error('username')
                {{ $message }}
              @enderror
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control @error('email')
              border border-danger border-3 rounded-2
              @enderror" name="email" aria-describedby="emailHelp">
              @error('email')
              {{ $message }}
            @enderror
            </div>
            <div class="mb-3">
              <label for="profilePicture" class="form-label">Profile Picture(Optional)</label>
              <input type="file" class="form-control" name="profilePicture">
            </div>
       
            
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control @error('password')
              border border-danger border-3 rounded-2
              @enderror" name="password">
              @error('password')
              {{ $message }}
            @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation">
              </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
            
          </form>
        </div>
    </div>
@endsection