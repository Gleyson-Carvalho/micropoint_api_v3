<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'nome', 'pacode', 'carga_horaria','data_inicio','data_fim',
        'finalizado','modulo1','modulo2','modulo3','modulo4','modulo5',
        'modulo6','modulo7','modulo8','modulo9','modulo10',
    ];
}
