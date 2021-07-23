@extends('layouts.bg')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Login</h1>
        <div class="w-50 m-auto">
        <form class="mt-3 thuziak">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
            
          </form>
        </div>
    </div>
@endsection