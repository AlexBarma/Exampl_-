<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function edit(Post $post){//Post $post выводит ошибку для пользователя если урл не правильный

        $categories=Category::all();
        return view('post.edit',compact('post','categories'));
    }
}
