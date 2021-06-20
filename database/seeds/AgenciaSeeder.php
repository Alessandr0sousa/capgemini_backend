<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencia')->insert([
            'inst_bancaria' => 1,
            'cod_ag' => Str::random(6),
            'cnpj' => Str::random(14),
            'endereco' => 'Tv. Djalma Dutra, 1239, Telegrafo sem fio, Belém - PA',
        ]);
    }
}
