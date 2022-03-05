<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class StoreFactory extends Factory
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
            'name' => $this->faker->streetName(),
            'image' => 'default-store.jpg',
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'user_id' => User::all()->unique()->random()->id
        ];
    }
}
