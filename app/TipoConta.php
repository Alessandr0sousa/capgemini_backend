<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TipoConta extends Model
{
    Protected $table = 'tipo_conta';
    protected $fillable = [
        'tipo', 'operacao'
    ];
}
