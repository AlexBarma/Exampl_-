<?php

namespace App\Http\Controllers\Admin\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;


class AdminStorePostController extends AdminBaseController
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated(); //Проверяем форму с помощью сторереквест

        $this->service->store($data); //обрабатываем данные в базе данных обновляем сохраняем или вносим

        return redirect()->route('admin.post.index'); //После валидации и сохранения в БД эта строчка переносит пользователя на нужную страницу
    }
}
