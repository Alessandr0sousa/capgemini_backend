<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agecia extends Model
{
    Protected $table = 'agencia';
    protected $fillable = [
        'inst_bancaria', 'cod_ag', 'cnpj', 'endereco'
    ];
}
