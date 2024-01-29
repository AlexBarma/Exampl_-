<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;

class CatalogController extends Controller
{
    public function index(FilterRequest $request)
    {
        $posts = Post::all();
        $categories = Category::all();

        //Усанавливаем фильтр------------
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $postFilters=Post::filter($filter)->get();// пример запрашиваем пост c category_id=2 и наличием в посте слова "dolor" и http://127.0.0.1:8000/?posts&title=dolor&category_id=2
         //dd($postFilter); пример запрашиваем пост c category_id=2 и наличием в посте слова "dolor" и http://127.0.0.1:8000/?posts&title=dolor&category_id=2
        return view('catalog', compact('posts', 'categories','postFilters'));
    }
}
