<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showAllPosts()
    {
        return response()->json(Post::all());
    }
}
