<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Users")->insert([
            ['id' => 1, 'name' => 'testname', 'email' => 'test@email', 'password' => '12345678']
        ]);
    }
}
