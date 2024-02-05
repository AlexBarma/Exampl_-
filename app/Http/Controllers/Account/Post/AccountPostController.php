<?php

namespace App\Http\Controllers\Account\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AccountPostController extends Controller
{
    public function accountPost(FilterRequest $request)
    {
        $categories=Category::all();
        $posts = Post::paginate(5); //Пагинация вводит нужное количество постов на страницу
        //Возможность использовать фильтр
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $postFilter = Post::filter($filter)->get();
        return view('account.accountPost', compact('posts','categories'));
    }
}
