<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Post\StoreRequest;

class Service
{

    public function store($data)
    {
        Post::create($data); //После пройденной валидации данные созданного поста приходят на страницу поста и сохраняются в базу данных

    }
    public function update($post,$data)
    {
        $post->update($data); //После пройденной валидации данные  поста обновляются приходят на страницу поста
    }
}
