<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return view('index',compact('posts'));
    }
}
