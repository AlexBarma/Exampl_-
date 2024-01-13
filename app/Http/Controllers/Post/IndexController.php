<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Filters\PostFilter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Post\FilterRequest;


class IndexController extends Controller
{
    public function index(FilterRequest $request)
    {
        $posts=Post::paginate(10);//Пагинация вводит нужное количество постов на страницу
        //Возможность использовать фильтр
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $postFilter=Post::filter($filter)->get();


        return view('index',compact('posts'));
    }
}
