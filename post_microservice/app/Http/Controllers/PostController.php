<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Utility\Request;

class PostController extends Controller
{
    public function show()
    {
        return [
            'posts' => Post::all(),
            'recent_comments' => Request::getRecentComment()
        ];
    }
}
