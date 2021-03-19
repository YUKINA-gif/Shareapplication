<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "test",
            "email" => "test@test.com",
            "password" => "test",
            "profile" => "test"
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "test2",
            "email" => "test2@test.com",
            "password" => "test2",
            "profile" => "test2"
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "test3",
            "email" => "test3@test.com",
            "password" => "test3",
            "profile" => "test3"
        ];
        DB::table("users")->insert($param);

    }
}
