<?php

namespace App\Http\Controllers\Post;


use App\Services\Post\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;
    //Здесь мы прописали $service и присвоили ему с помощью метода __construct контроллер Service который находится \app\Services\Post\Service.php
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
