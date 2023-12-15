<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $data=request()->validate([
        'title'=>'',
        'content'=>'',
        'image'=>'',
    ]);
        Post::create($data);//После пройденной валидации данные созданного поста приходят на страницу создания поста и сохраняются в базу данных
        return redirect()->route('main.index');//После валидации и сохранения в БД эта строчка переносит пользователя на нужную страницу
    }

}
