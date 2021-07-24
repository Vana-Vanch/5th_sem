@extends('layouts.app')
@section('content')
        <div class="container-fluid main-bg-profile min-vh-100">
            <div class="container">

             
                @if(!Auth::user()->profilePicture)
                    <div class=" h-25 w-25 m-auto">
                    <img src="{{asset('images/web/no-image.png') }}" class="img-circle mt-4" alt="no picture">
                    
                        </div>
       
                @else
                <div class="m-auto text-center">
                    <img src="{{ asset('images/profile/'.Auth::user()->profilePicture) }}" class="rounded-circle mt-4 img-fluid" alt="{{ Auth::user()->profilePicture }}" style="height: 15rem; width:22rem;">
                </div>
        
                @endif
                        <div class="m-auto w-25 text-center mt-4">
                            <h3><i>{{ Auth::user()->name }}</i></h3>
                            <h5><i>{{ Auth::user()->email }}</i></h5>
     
                            @if(Auth::user()->bio)
                            <h4 class="mt-3">About</h4>
                            <p>{!! Auth::user()->bio !!}</p>
                            @else
                            <h4 class="mt-3">About</h4>
                            <p>No bio</p>
                            @endif
                        </div>
                        <div class="text-center d-flex justify-content-around w-25 m-auto">
                               <a class="btn btn-success" href="{{ route('profile.update', Auth::user()) }}">Edit Profile</a> 
                               <form action="{{ route('profile.destroy', Auth::user()) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete Profile" class="btn btn-info">
                        </div>
            </div>
        </div>
        
    
@endsection

