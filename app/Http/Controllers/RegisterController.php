<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
     
    
        if($request->profilePicture){
            $new_img_name = time().'-'.$request->username.'.'.$request->profilePicture->extension();
            $request->profilePicture->move(public_path('images/profile'), $new_img_name);
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'profilePicture' => $new_img_name ]);
                auth()->attempt($request->only('email', 'password'));
                return redirect('/dashboard');
            
        }
        else
        {
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
    
            ]);
            auth()->attempt($request->only('email', 'password'));
            return redirect()->route('dashboard');
        }

       
}
}
