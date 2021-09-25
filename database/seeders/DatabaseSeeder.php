<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '0101010101',
            'demand' => Str::random(10),
        ]);
    }
}
