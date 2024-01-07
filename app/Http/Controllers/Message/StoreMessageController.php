<?php

namespace App\Http\Controllers\Message;

use App\Models\UserMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreMessageRequest;

class StoreMessageController extends BaseMessageController
{
    public function storeMessage(StoreMessageRequest $request)
    {
        $data = $request->validated();
        $this->messageService->storeMessage($data);
        // UserMessage::create($data); //После пройденной валидации данные созданного письма  сохраняются в базу данных
        return redirect()->route('main.index');
    }
}
