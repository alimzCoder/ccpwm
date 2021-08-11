<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => 'dollar',
            'code' => 'usd',
            'exchange_rate' => '1',
            'is_default_exchanger' => true,
        ]);

        DB::table('currencies')->insert([
            'name' => 'Lira',
            'code' => 'LBP',
            'exchange_rate' => '20000',
            'is_default_exchanger' => true,
        ]);



    }
}
