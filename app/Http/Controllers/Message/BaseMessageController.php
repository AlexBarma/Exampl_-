<?php

namespace App\Http\Controllers\Message;


use App\Services\Message\MessageService;
use App\Http\Controllers\Controller;

class BaseMessageController extends Controller
{
    public $messageService;
    //Здесь мы прописали $service и присвоили ему с помощью метода __construct контроллер Service который находится \app\Services\Post\Service.php
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }
}
