<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminPostController extends Controller
{
    public function index(){
        $posts=Post::all();
        $categories=Category::all();
        return view('admin.post',compact('posts','categories'));
    }
}
