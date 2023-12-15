<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_message extends Model
{
    use HasFactory;
    use SoftDeletes; //при создании мягкого удаления, в модель обзательно прописывается этот трейд.
    protected $guarded=[];//отключение защиты ларавел на добавление новых данных или так protected $guarded=false;
}
