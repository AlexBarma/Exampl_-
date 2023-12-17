<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends BaseController
{
    public function edit(Post $post){//Post $post выводит ошибку для пользователя если урл не правильный


        return view('post.edit',compact('post'));
    }
}
