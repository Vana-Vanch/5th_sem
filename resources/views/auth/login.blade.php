@extends('layouts.bg')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Login</h1>
        <div class="w-50 m-auto">
        <form class="mt-3 thuziak" action="{{ route('login') }}" method="POST">
          @csrf
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
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" @error('password')
              border border-danger border-3 rounded-2
              @enderror">
              @error('password')
              {{ $message }}
            @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
            
          </form>
        </div>
    </div>
@endsection