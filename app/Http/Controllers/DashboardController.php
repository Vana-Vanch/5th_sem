<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $posts = Post::latest()->paginate(3);
        return view('pages.dashboard', [
            'posts' => $posts
        ]);
    }
}
