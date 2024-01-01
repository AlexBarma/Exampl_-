<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $posts=Post::all();
        $categories=Category::all();
        return view('catalog',compact('posts','categories'));
    }
}
