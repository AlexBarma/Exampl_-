<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function create(Post $post){
        $categories=Category::all();
        $user_id=Auth::user()->id;

        return view('post.create',compact('categories','user_id'));
    }

}
