<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
    	return [
    	   'name' => $this->faker->word,
    	   'text' => $this->faker->paragraph,
    	   'location' => $this->faker->word,
    	];
    }
}
