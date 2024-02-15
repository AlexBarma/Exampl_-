<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\User;
use App\Models\Category;
use App\Models\PostUserLike;
use Illuminate\Http\Request;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;

class LikedController extends Controller
{
    public function likedPost(Post $post,FilterRequest $request)
    {
        $paginate = Post::paginate(5); //Пагинация вводит нужное количество постов на страницу
        //Возможность использовать фильтр
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $postFilter = Post::filter($filter)->get();

        $categories=Category::all();
        $posts = auth()->user()->LikedPosts;
        return view('user.likedPost', compact('posts','categories','paginate'));
    }
    public function addLiked(Post $post)
    {
        // auth()->user()->LikedPosts->toggle($post->id);
        $data['post_id'] = $post->id;
        $data['user_id'] = auth()->user()->id;
        PostUserLike::create($data); //Данные   сохраняются в базу данных
        return redirect()->route('main.show', $post->id);
    }
}
