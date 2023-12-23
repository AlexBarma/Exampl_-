<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(1);
            $table->timestamps();

            $table->softDeletes();//мягкое удаление(обязательно в любом проекте)
            // прописываем forenkey отношение одного в многим
            $table->unsignedBigInteger('category_id')->nullable(); //создаем колонку с айдишниками привязанных категорий
            $table->index('category_id','post_category_idx');// создаем индекс этой колонки и даем ему название
            $table->foreign('category_id','post_category_fk')->on('categories')->references('id');//создаем ключ привязки к этой колонке и создаем ему название, а также прописываем путь к таблице категорий и даем понять к чему должна быть привязка в таблице категорий (id)


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
