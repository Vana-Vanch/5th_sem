@extends('layouts.app')
@section('content')
<div class="continer-fluid bg-primary">
    <h2 class="thuziak text-center">Recent users</h2>
    <div class="container">
    <div class="row mt-5">
        @foreach ($users as $user)
         @if($user->profilePicture)
            <div class="col-md-4 mb-3">
                <div class="card bg-primary">
                    <img src="{{ asset('images/profile/'. $user->profilePicture) }}" alt="{{ $user->name }}" style="height: 20rem;" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h4 class="card-title thuziak">{{ $user->name }}</h4>
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-4">
                <div class="card bg-primary">
                    <img src="{{ asset('images/web/no-image.png') }}" alt="{{ $user->name }}}" style="height: 20rem;" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h4 class="card-title thuziak">{{ $user->name }}</h4>
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>  
</div>

@endsection