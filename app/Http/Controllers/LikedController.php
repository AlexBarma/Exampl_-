<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Post;
use Illuminate\Http\Request;

class LikedController extends Controller
{
    // public function like(Post $post){
    //     $posts=Post::all();
    //    dd($post->id);
    // }
    // public function unlike(){
    //     dd('0000000000000000');
    // }
    public function postLiked(){
        $posts=auth()->user()->LikedPosts;
        // dd($posts);
        return view('user.likedPost',compact('posts'));

    }
}
