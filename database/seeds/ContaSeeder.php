<?php

use App\Conta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Conta::class, 5)->create();

        DB::table('conta')->insert([
            'agencia' => 1,
            'user' => 1,
            'tipo_conta' => 1,
            'saldo' => 10000.00
        ]);

    }
}
