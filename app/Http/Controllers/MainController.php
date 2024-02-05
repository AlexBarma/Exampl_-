<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        // $this->authorize('view',auth()->user()); вариант одной из работ с полицией
        $posts = auth()->user()->LikedPosts;
        return view('layouts.main', compact('posts'));
    }

}
