<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index()
    {
         $posts = Post::all();
        //$category = Category::find(2); с помощью метода find() находим категории с id=2
        //$post=Post::find(1); с помощью метода find() находим post с id=2
        //return dd($post->category); возвращаем категорию этого поста
        //return dd($category->posts); возвращаем все посты которые привязаны ко второй категории
         return view('index',compact('posts'));
    }
}
