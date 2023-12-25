<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUserLike extends Model
{
    use HasFactory;
    protected $table='post_user_likes'; //указываем созданную таблицу
    protected $guarded=false;//разрешаем изменения в таблице
}
