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
            // auth()->user()->LikedPosts->toggle($post->id);
            $data ['post_id'] = $post->id;
            $data ['user_id'] = auth()->user()->id;
        PostUserLike::create($data); //Данные   сохраняются в базу данных
        return redirect()->route('main.show',$post->id);
    }
}
