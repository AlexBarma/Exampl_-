<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table='tags'; //указываем созданную таблицу
    protected $guarded=false; //разрешаем изменения в таблице

    public function tagPost(){//создается функция users в классе  пост которая позволяет возвращать информацию о любых категориях привязанных к постам
        return $this->belongsToMany(Post::class,'post_tags', 'tag_id','post_id');//belongsTo говорит о том что пост имеет только одну категорию и уточнение Где т.е. Category::class кто с кем взаимодействует? (категория взаимодействует с постом) Название ключа т.е. 'category_id' взаимодействует с Название  ключа  т.е 'id'
    }
}
