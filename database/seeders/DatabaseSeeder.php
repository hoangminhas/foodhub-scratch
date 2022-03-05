<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
         User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(FoodSeeder::class);
    }
}
