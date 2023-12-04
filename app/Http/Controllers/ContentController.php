<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){

        //$posts=Post::where('id', 1)->get();//хардкорный способ получить первый id что то из базы данных

         $posts=Post::all();//плучить все карточки из базы данных

          return view('content',compact('posts'));//пременная posts в которой находятся все посты из базы данных, отображается во view с названием
    }
}
