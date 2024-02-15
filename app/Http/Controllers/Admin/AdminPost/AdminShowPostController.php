<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin\AdminPost;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminShowPostController extends AdminBaseController
{
    public function show(Post $post)//Post $post выводит ошибку для пользователя если урл не правильный
    {
        $categories=Category::all();

         return view('admin.adminPost.admin_show',compact('post','categories'));

    }
}
