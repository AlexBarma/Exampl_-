<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Post;
use Illuminate\Http\Request;

class LikedController extends Controller
{
    public function postLiked(){
        $posts=auth()->user()->LikedPosts;
        return view('user.likedPost',compact('posts'));

    }
}
