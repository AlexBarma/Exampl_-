<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; //при создании мягкого удаления, в модель обзательно прописывается этот трейд.
    protected $table='posts';
    protected $guarded=[];//отключение защиты ларавел на добавление новых данных или так protected $guarded=false;
    //protected $fillable=['title','content']//отключение защиты ларавел для добавление определенных атрибутов

    public function category(){//создается функция категория в классе  пост которая позволяет возвращать информацию о любых категориях привязанных к постам
        return $this->belongsTo(Category::class, 'category_id','id');//belongsTo говорит о том что пост имеет только одну категорию и уточнение Где т.е. Category::class Название ключа т.е. 'category_id' и Название колонки ключа  т.е 'id'
    }
}
