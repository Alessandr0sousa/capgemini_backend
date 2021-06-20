<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_conta')->insert([
            'tipo' => 'corrente',
            'operacao' => '2',
        ]);
        DB::table('tipo_conta')->insert([
            'tipo' => 'poupança',
            'operacao' => '13',
        ]);
    }
}
