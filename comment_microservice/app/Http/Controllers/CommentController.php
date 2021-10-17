<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function recent()
    {
        return Comment::orderBy('id', 'desc')->take(10)->get();
    }
}
