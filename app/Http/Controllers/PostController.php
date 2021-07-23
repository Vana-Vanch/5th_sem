<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
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
            return back();
                
        }else{
            auth()->user()->post()->create([
                'title' => $request->title,
                'body' => $request->body,
            ]);
            return back();
        }
    }
}
