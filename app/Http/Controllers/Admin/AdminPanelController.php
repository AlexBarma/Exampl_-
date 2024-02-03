<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{
    public function index(){
        $posts=Post::all();
        // dd(count($posts));
        return view('layouts.admin',compact('posts'));
    }
}
