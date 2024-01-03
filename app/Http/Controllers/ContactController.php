<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UserMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::all();

        return view('contact', compact('posts'));
    }
}
