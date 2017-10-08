<?php

use Illuminate\Database\Seeder;

class BeerSeed extends Seeder
{
    public function run()
    {
        $table = 'beers';
        DB::table($table)->insert([
            'name' => "Kozel",
            'origin' => 'Czech',
            'type' => 'pale',
            'amount'  => 3
        ]);

        DB::table($table)->insert([
            'name' => "Schofferhofer",
            'origin' => 'Germany',
            'type' => 'weiss',
            'amount'  => 26
        ]);

        DB::table($table)->insert([
            'name' => "Guinness",
            'origin' => 'Ireland',
            'type' => 'pale malt',
            'amount'  => 11
        ]);

        DB::table($table)->insert([
            'name' => "Põhjala Hooaeg",
            'origin' => 'Estonia',
            'type' => 'pale ale (saison)',
            'amount'  => 34
        ]);

        DB::table($table)->insert([
            'name' => "Brooklyn",
            'origin' => 'US',
            'type' => 'pumpkin ale',
            'amount'  => 56
        ]);

        DB::table($table)->insert([
            'name' => "Bernard",
            'origin' => 'Czech',
            'type' => 'pale ale',
            'amount'  => 34
        ]);
    }
}
