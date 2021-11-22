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
        DB::table('categories')->insert([
            [
                'name' => "Healthy Series",
                'slug' => "healthy-series",
            ],[
                'name' => "Milk Series",
                'slug' => "milk-series",
            ],[
                'name' => "Fruteria Series",
                'slug' => "fruteria-series",
            ],[
                'name' => "Remedy Series",
                'slug' => "remedy-series",
            ],[
                'name' => "Set & Packages",
                'slug' => "set-packages",
            ],[
                'name' => "Programme",
                'slug' => "programme",
            ]
        ]);
    }
}
