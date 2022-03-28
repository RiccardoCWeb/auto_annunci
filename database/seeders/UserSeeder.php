<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'riccardo',
            'email' => 'riccardo@gfef.it',
            'password' => Hash::make('123456789'),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'andrea',
            'email' => 'andrea@gfef.it',
            'password' => Hash::make('123456789'),
            'created_at' => Carbon::now()
        ]);
    }
}
