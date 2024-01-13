<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Filterable;
    use SoftDeletes; //при создании мягкого удаления, в модель обзательно прописывается этот трейд.
    protected $table='posts';
    protected $guarded=[];//отключение защиты ларавел на добавление новых данных или так protected $guarded=false;
    //protected $fillable=['title','content']//отключение защиты ларавел для добавление определенных атрибутов

    public function category(){//создается функция категория в классе  пост которая позволяет возвращать информацию о любых категориях привязанных к постам
        return $this->belongsTo(Category::class, 'id','category_id');//belongsTo говорит о том что пост имеет только одну категорию и уточнение Где т.е. Category::class кто с кем взаимодействует? (категория взаимодействует с постом) Название ключа т.е. 'category_id' взаимодействует с Название  ключа  т.е 'id'
    }

    public function postUsersLikes(){//создается функция users в классе  пост которая позволяет возвращать информацию о любых категориях привязанных к постам
        return $this->belongsToMany(User::class,'post_user_likes', 'post_id','user_id');//belongsTo говорит о том что пост имеет только одну категорию и уточнение Где т.е. Category::class кто с кем взаимодействует? (категория взаимодействует с постом) Название ключа т.е. 'category_id' взаимодействует с Название  ключа  т.е 'id'
    }

    public function postTags(){//создается функция users в классе  пост которая позволяет возвращать информацию о любых категориях привязанных к постам
        return $this->belongsToMany(Tag::class,'post_tags', 'post_id','tag_id');//belongsTo говорит о том что пост имеет только одну категорию и уточнение Где т.е. Category::class кто с кем взаимодействует? (категория взаимодействует с постом) Название ключа т.е. 'category_id' взаимодействует с Название  ключа  т.е 'id'
    }
}


