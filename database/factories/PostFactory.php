<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model=Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->text(20),
            'content'=> $this->faker->text(100),
            'image'=> $this->faker->imageUrl(),
            'is_published'=> 1,
            'category_id'=> Category::get()->random()->id,
        ];
    }
}
