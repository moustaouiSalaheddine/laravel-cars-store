<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();  
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->numberBetween($min = 100, $max = 900),
                'image' => "/storage/products/car_1.jpeg",
            ]);
        }
    }
}
