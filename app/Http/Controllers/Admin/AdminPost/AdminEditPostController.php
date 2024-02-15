<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin\AdminPost;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminEditPostController extends AdminPostController
{
    public function edit(Post $post){//Post $post выводит ошибку для пользователя если урл не правильный

        $categories=Category::all();
        return view('admin.adminPost.admin_edit',compact('post','categories'));
    }
}
