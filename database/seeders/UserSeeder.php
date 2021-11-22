<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => "Gregoryus Imannuel Perdana",
                'username' => "admin-super",
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => "Ricardo Octavianus",
                'username' => "admin-ado",
                'email' => 'ricardo@gmail.com',
                'password' => bcrypt('admin'),
            ],
        ]);
    }
}
