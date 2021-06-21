<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 5)->create();

        /* DB::table('users')->insert([
            'name' => 'Alessandro Medeiros de Sousa',
            'email' => 'alessandro.anali@gmail.com',
            'telefone' => '91984095121',
            'password' => Hash::make('senha123'),
        ]); */
    }
}
