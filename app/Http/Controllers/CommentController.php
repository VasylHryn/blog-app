<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'post_id' => $postId,
            'user_id' => auth()->id(),
        ]);

        return response()->json($comment, 201);
    }
}