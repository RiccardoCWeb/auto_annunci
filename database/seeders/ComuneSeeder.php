<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ComuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comuni')->insert([
            'regione' => 'Abruzzo',
            'provincia' => 'PE',
            'comune' => 'Pescara'
        ]);
        DB::table('comuni')->insert([
            'regione' => 'Abruzzo',
            'provincia' => 'CH',
            'comune' => 'Chieti'
        ]);
        DB::table('comuni')->insert([
            'regione' => 'Molise',
            'provincia' => 'CB',
            'comune' => 'Campobasso'
        ]);
        DB::table('comuni')->insert([
            'regione' => 'Molise',
            'provincia' => 'IS',
            'comune' => 'Isernia'
        ]);
        DB::table('comuni')->insert([
            'regione' => 'Molise',
            'provincia' => 'CB',
            'comune' => 'Termoli'
        ]);
    }
}
