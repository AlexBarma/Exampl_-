<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Post $post)//Post $post выводит ошибку для пользователя если урл не правильный
    {
         return view('post.show',compact('post'));

    }
}
