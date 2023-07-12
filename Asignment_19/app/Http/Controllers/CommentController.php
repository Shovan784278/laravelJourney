<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
{
    $request->validate([
        'name' => 'required',
        'content' => 'required',
    ]);

    $post = Post::findOrFail($postId);

    $comment = new Comment();
    $comment->name = $request->input('name');
    $comment->content = $request->input('content');

    $post->comments()->save($comment);

    return redirect()->route('posts.show', $post->id)->with('success', 'Comment added successfully.');
}
}
