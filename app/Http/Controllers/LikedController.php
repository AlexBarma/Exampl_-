<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\User;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class LikedController extends Controller
{
    public function likedPost(Post $post)
    {
        $posts = auth()->user()->LikedPosts;
        return view('user.likedPost', compact('posts'));
    }
    public function addLiked(Post $post)
    {
        $data = request()->validate(
            [
                'post_id'=>'',
                'user_id'=>'',
            ]
        );
            $data ['post_id'] = $post->id;
            $data ['user_id'] = auth()->user()->id;
            $posts = auth()->user()->LikedPosts;
        PostUserLike::create($data); //После пройденной валидации данные созданного письма  сохраняются в базу данных
        return redirect()->route('main.show',$post->id, compact('posts'));
    }
}
