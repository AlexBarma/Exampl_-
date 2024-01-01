<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends BaseController
{
    public function create(Post $post){
        $categories=Category::all();

        return view('post.create',compact('categories'));
    }
}
