<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\UserMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;


class StoreController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Post::create($data); //После пройденной валидации данные созданного поста приходят на страницу создания поста и сохраняются в базу данных
        return redirect()->route('main.index'); //После валидации и сохранения в БД эта строчка переносит пользователя на нужную страницу
    }

}
