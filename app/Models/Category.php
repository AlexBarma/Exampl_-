<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $guarded=false;

    public function posts(){//создается функция постс в классе  категорий которая позволяет возвращать информацию о любых постах определенной категории
        return $this->hasMany(Post::class, 'category_id','id');//hasMany() говорит о том что у категория имеет много постов и уточнение Где т.е. Post::class Название ключа т.е. 'category_id' и Название колонки ключа  т.е 'id'
    }
}
