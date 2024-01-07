<?php

namespace App\Services\Message;

use App\Models\UserMessage;

class MessageService
 {

    public function storeMessage($data)
    {
        UserMessage::create($data); //После пройденной валидации данные созданного письма  сохраняются в базу данных
    }
}
