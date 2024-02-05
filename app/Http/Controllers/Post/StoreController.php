<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\UserMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Post\StoreRequest;


class StoreController extends BaseController
{
    public function store(StoreRequest $request)
    {


        $data =$request->validated(); //Проверяем форму с помощью сторереквест

        $this->service->store($data); //обрабатываем данные в базе данных обновляем сохраняем или вносим

        return redirect()->route('main.index'); //После валидации и сохранения в БД эта строчка переносит пользователя на нужную страницу
    }
}
