<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'Fruits']);
        DB::table('categories')->insert(['name'=>'Vegetables']);
        DB::table('categories')->insert(['name'=>'Grains']);
        DB::table('categories')->insert(['name'=>'Seafood']);
        DB::table('categories')->insert(['name'=>'Meat&Poultry']);
    }
}
