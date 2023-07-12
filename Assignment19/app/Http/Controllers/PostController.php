<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        //return response()->json($posts);
        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return response()->json($post);
        
    }

}
