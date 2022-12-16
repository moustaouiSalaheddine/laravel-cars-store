<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
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
            $parentId = NULL;
            DB::table('categories')->insert([
                'name' => $faker->name,
                'parent_id' => $parentId,
            ]);
        }
        for ($i = 2; $i < 10; $i++) {
            $parentId = rand(1, $i);
            DB::table('categories')->insert([
                'name' => $faker->name,
                'parent_id' => $parentId,
            ]);
        }
    }
}
