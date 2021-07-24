<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('pages.profile');
    }

    public function create(User $user){
        return view('pages.profileupdate', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){
        if($request->profilePicture){
            $newImgName = time().'-'.$request->username.'.'.$request->profilePicture->extension();
            $request->profilePicture->move(public_path('images/profile'), $newImgName);
            User::where('id', $id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'profilePicture' => $newImgName,
                'bio' => $request->body,
            ]);
        }else{
            User::where('id', $id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'bio' => $request->body,
            ]);
        }
        return redirect()->route('profile');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('home');
    }
}
