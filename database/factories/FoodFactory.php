<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->word(),
            'image' => 'default-food.jpg',
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(4, 0, 200000),
            'food_code' => $this->faker->unique()->numberBetween(1, 200),
            'category_id' => Category::all()->random()->id
        ];
    }
}
