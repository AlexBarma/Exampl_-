<?php

namespace App\Http\Controllers\Account;

use App\Models\Post;
use App\Http\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;


class AccountMenuController extends Controller
{
    public function accountMenu(FilterRequest $request)
    {
        $posts=Post::all();

        $posts = Post::paginate(5); //Пагинация вводит нужное количество постов на страницу
        //Возможность использовать фильтр
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $postFilter = Post::filter($filter)->get();
        return view('layouts.account', compact('posts'));
    }
}
