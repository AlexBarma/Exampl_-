<?php

namespace App\Http\Controllers\Admin\AdminPost;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;


class AdminPostController extends Controller
{
    public function index(FilterRequest $request)
    {
        $posts=Post::paginate(5);//Пагинация вводит нужное количество постов на страницу
        //Возможность использовать фильтр
        $data = $request->validated();
        $categories=Category::all();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $postFilter=Post::filter($filter)->get();


        return view('admin.post',compact('posts','categories'));
    }
}
