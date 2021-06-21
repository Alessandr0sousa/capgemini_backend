<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inst_bancarias')->insert([
            'nome'      => 'Capgemini',
            'codigo'    => '894',
        ]);
    }
}
