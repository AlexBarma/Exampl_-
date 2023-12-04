<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Post $post){//Post $post выводит ошибку для пользователя если урл не правильный


        return view('post.edit',compact('post'));
    }
}
