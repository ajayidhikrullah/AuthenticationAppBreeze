<?php

namespace Database\Factories;
use App\Models\User;
// use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //category info
            // 'user_id' => User::factory(),
            // 'category_id' => Category::factory(),
            'name' => $this->faker->word,
            'slug' => $this->faker->slug
            // 'excerpt' => $this->faker->sentence,
            // 'body' => $this->faker->paragraph
            
        ];
    }
}
