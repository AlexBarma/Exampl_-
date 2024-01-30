<?php

namespace App\Http\Controllers\Admin\AdminPost;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminCreatePostController extends AdminBaseController
{
    public function create(Post $post){
        $categories=Category::all();

        return view('admin.create',compact('categories'));
    }
}
