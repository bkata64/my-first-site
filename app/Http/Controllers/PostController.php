<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($post)
    {
        // return view('post', compact('post'));
        $length = Post::getLength($post);
        return view('post', compact('post', 'length'));
    }
}
