<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUserLike extends Model
{
    use HasFactory;
    protected $table='post_user_likes'; //указываем созданную таблицу
    protected $guarded=false; //разрешаем изменения в таблице

    public function userLiked(){//создается функция категория в классе  пост которая позволяет возвращать информацию о любых категориях привязанных к постам
        return $this->hasMany(User::class, 'user_id','id');//belongsTo говорит о том что пост имеет только одну категорию и уточнение Где т.е. Category::class кто с кем взаимодействует? (категория взаимодействует с постом) Название ключа т.е. 'category_id' взаимодействует с Название  ключа  т.е 'id'
    }
}
