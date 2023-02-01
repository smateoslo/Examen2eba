<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
        DB::table('pots')->insert([
            'num_plazas_user' => random_int(1, 10),
            'num_plazas_trips' => random_int(1, 10),
        ]);
    }
    }
}
