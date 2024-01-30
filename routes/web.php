<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//Post
use App\Http\Controllers\MainController;
use App\Http\Controllers\LikedController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Post\EditController;
//Message
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\CreateController;

use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;

//Admin
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\AdminPostController;

use App\Http\Controllers\Message\StoreMessageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Авторизация
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Основные страницы

Route::get('/',[MainController::class,'index'])->name('main.index');//Роут header на главной страницы
Route::get('/content',[ContentController::class,'index'])->name('content.index');//Роут страницы контент
Route::get('/catalog',[CatalogController::class,'index'])->name('catalog.index');//Роут страницы каталог
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');//Роут страницы контакты

//Создание админ панели

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function(){
Route::get('/',[AdminPanelController::class,'index'])->name('admin.index');//Роут главной страницы админ панели
Route::get('/post',[AdminPostController::class,'index'])->name('admin.post.index');//Роут список постов в админке
});

// Route::get('/post',[AdminPostController::class,'index'])->name('post.index');//Редактор постов в админке


//Создание и редактирование поста
Route::group(['namespace'=>'Post'], function(){
Route::get('/',[IndexController::class,'index'])->name('main.index');//Роут slide и posts главной страницы
Route::get('/main/create',[CreateController::class,'create'])->name('main.create');//создание нового поста
Route::post('/main',[StoreController::class,'store'])->name('main.store');//проверка строк созданного поста и внесение в базу
Route::get('/main/{post}',[ShowController::class,'show'])->name('main.show');//показ созданного поста или вывод ошибки
Route::get('/main/{post}/edit',[EditController::class,'edit'])->name('main.edit');//изменение уже существующего поста в форме
Route::patch('/main/{post}',[UpdateController::class,'update'])->name('main.update');//обновление поста в базе и вывод его на экран
Route::delete('/main/{post}',[DestroyController::class,'destroy'])->name('main.delete');//удаление поста
});

//Отправка формы сообщения от пользователей
Route::group(['namespace'=>'Message'],function(){
 Route::post('/message',[StoreMessageController::class,'storeMessage'])->name('main.storeMessage');//проверка строк созданного поста и внесение в базу
});


//Создание раздела понравившегося поста
Route::get('/likedPosts',[LikedController::class,'likedPost'])->name('user.likedPost');//Роут на понравившиеся посты
Route::post('/addLiked/{post}',[LikedController::class,'addLiked'])->name('main.addLiked');//проверка строк понравивишегося поста и внесение в базу


//Фильтр



