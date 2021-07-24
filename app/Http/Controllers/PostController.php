<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('pages.create');
    }


    public function store(Request $request){
        
        
        $request->validate([
            'title' => 'required|max:50',
            'body' => 'required',
        ]);


        if($request->file){
            $new_file_name = time().'-'.$request->title.'.'.$request->file->extension();
            $request->file->move(public_path('images/blog'),$new_file_name);

            auth()->user()->post()->create([
                'title' => $request->title,
                'blog_image' => $new_file_name,
                'body' => $request->body,
            ]);
            return redirect()->route('dashboard');
                
        }else{
            auth()->user()->post()->create([
                'title' => $request->title,
                'body' => $request->body,
            ]);
            return redirect()->route('dashboard');
        }
    }

    public function show(Post $post){
        return view('pages.detail', [
            'post' => $post,
        ]);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('dashboard');
    }
}
