<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        // $posts = Post::all();
        $posts = auth()->user()->LikedPosts;
        return view('layouts.main', compact('posts'));
    }

}
