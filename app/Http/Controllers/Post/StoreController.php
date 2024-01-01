<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\UserMessage;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function store(){
        $data=request()->validate([
        'title'=>'',
        'content'=>'',
        'category_id'=>'',
        'image'=>'',


    ]);
        Post::create($data);//После пройденной валидации данные созданного поста приходят на страницу создания поста и сохраняются в базу данных
        return redirect()->route('main.index');//После валидации и сохранения в БД эта строчка переносит пользователя на нужную страницу
    }
    public function storeMessage(){
        $data=request()->validate(([
            'email'=>'',
            'messages'=>'',
        ]));
        UserMessage::create($data);//После пройденной валидации данные созданного письма  сохраняются в базу данных
        return redirect()->route('main.index');
    }

}
