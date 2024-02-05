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
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('image');

            $table->index('user_id','post_user_idx');// создаем индекс этой колонки и даем ему название
            $table->foreign('user_id','post_user_fk')->on('users')->references('id');//создаем ключ привязки к этой колонке и создаем ему название, а также прописываем путь к таблице категорий и даем понять к чему должна быть привязка в таблице users (id)

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
