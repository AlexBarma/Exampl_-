<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends BaseController
{
    public function show(Post $post)//Post $post выводит ошибку для пользователя если урл не правильный
    {
         return view('post.show',compact('post'));

    }
}