<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingredient_product')->insert([
            [
                'product_id' => 1,
                'ingredient_id' => 23,
            ],
            [
                'product_id' => 1,
                'ingredient_id' => 28,
            ],
            [
                'product_id' => 1,
                'ingredient_id' => 1,
            ],
            [
                'product_id' => 1,
                'ingredient_id' => 18,
            ],
            [
                'product_id' => 2,
                'ingredient_id' => 18,
            ],
            [
                'product_id' => 2,
                'ingredient_id' => 1,
            ],
            [
                'product_id' => 2,
                'ingredient_id' => 9,
            ],
            [
                'product_id' => 3,
                'ingredient_id' => 49,
            ],
            [
                'product_id' => 3,
                'ingredient_id' => 43,
            ],
            [
                'product_id' => 3,
                'ingredient_id' => 47,
            ],
            [
                'product_id' => 4,
                'ingredient_id' => 39,
            ],
            [
                'product_id' => 4,
                'ingredient_id' => 35,
            ],
            [
                'product_id' => 4,
                'ingredient_id' => 6,
            ],
            [
                'product_id' => 4,
                'ingredient_id' => 47,
            ],
            [
                'product_id' => 5,
                'ingredient_id' => 19,
            ],
            [
                'product_id' => 5,
                'ingredient_id' => 15,
            ],
            [
                'product_id' => 6,
                'ingredient_id' => 13,
            ],
            [
                'product_id' => 6,
                'ingredient_id' => 5,
            ],
            [
                'product_id' => 6,
                'ingredient_id' => 1,
            ],
            [
                'product_id' => 7,
                'ingredient_id' => 26,
            ],
            [
                'product_id' => 7,
                'ingredient_id' => 1,
            ],
            [
                'product_id' => 7,
                'ingredient_id' => 18,
            ],
            [
                'product_id' => 7,
                'ingredient_id' => 9,
            ],
            [
                'product_id' => 8,
                'ingredient_id' => 51,
            ],
            [
                'product_id' => 8,
                'ingredient_id' => 52,
            ],
            [
                'product_id' => 8,
                'ingredient_id' => 53,
            ],
            [
                'product_id' => 8,
                'ingredient_id' => 54,
            ],
            [
                'product_id' => 8,
                'ingredient_id' => 57,
            ],
            [
                'product_id' => 9,
                'ingredient_id' => 51,
            ],
            [
                'product_id' => 9,
                'ingredient_id' => 52,
            ],
            [
                'product_id' => 9,
                'ingredient_id' => 53,
            ],
            [
                'product_id' => 9,
                'ingredient_id' => 54,
            ],
            [
                'product_id' => 9,
                'ingredient_id' => 57,
            ],
            [
                'product_id' => 9,
                'ingredient_id' => 61,
            ],
            [
                'product_id' => 10,
                'ingredient_id' => 59,
            ],
            [
                'product_id' => 10,
                'ingredient_id' => 55,
            ],
            [
                'product_id' => 10,
                'ingredient_id' => 51,
            ],
            [
                'product_id' => 10,
                'ingredient_id' => 61,
            ],
            [
                'product_id' => 10,
                'ingredient_id' => 52,
            ],
            [
                'product_id' => 10,
                'ingredient_id' => 62,
            ],
        ]);
    }
}
