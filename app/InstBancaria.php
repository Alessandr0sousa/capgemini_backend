<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstBancaria extends Model
{
    Protected $table = 'inst_bancaria';
    protected $fillable = [
        'nome', 'codigo'
    ];
}
