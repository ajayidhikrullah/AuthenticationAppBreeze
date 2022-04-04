<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //assign some Factory and faker properties to Post fields in ddatabase
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->sentence,
            'title' => $this->faker->sentence,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->sentence,
        ];
    }
}
