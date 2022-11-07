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
        // INSERT RECORDS IN USERS TABLE
        DB::table('users')->insertOrIgnore([
        	[
                'name'          => "Super Admin",
                'email'         => "admin@gmail.com",
                'password'      => bcrypt("12345678"),
                'country_code' => '+92',
                'mobile_no'     => "12345671",
                'gender'        => "male",
                'date_of_birth' => "1971-01-01",
                'status'        => 1,
            ],
            [
                'name'          => "Test User",
                'email'         => "testuser@gmail.com",
                'password'      => bcrypt("12345678"),
                'country_code' => '+92',
                'mobile_no'     => "12345672",
                'gender'        => "male",
                'date_of_birth' => "1972-01-01",
                'status'        => 1,
            ],
        ]);
    }
}