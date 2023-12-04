<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Post $post){
        $posts=Post::all();
       dd($post->id);
    }
    public function unlike(){
        dd('0000000000000000');
    }
}
