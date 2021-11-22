<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blog_categories')->insert([
            [
                'name' => "Cerita Sukses",
                'slug' => "cerita-sukses",
            ],[
                'name' => "Kesehatan",
                'slug' => "kesehatan",
            ],[
                'name' => "Proses Diet",
                'slug' => "proses-diet",
            ],
        ]);
    }
}
