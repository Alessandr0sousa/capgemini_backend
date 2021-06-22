<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    Protected $table = 'conta';
    protected $fillable = [
        'agencia', 'user', 'tipo_conta', 'saldo'
    ];
}
