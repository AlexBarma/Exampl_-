<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory(2)->create();
        $tags = Tag::factory(20)->create();
        $posts = Post::factory(50)->create();
        User::factory(20)->create();

        foreach($posts as $post ){
            $tagsIds = $tags->random(3)->pluck('id');
            $post->postTags()->attach($tagsIds);
        }

    }
}
