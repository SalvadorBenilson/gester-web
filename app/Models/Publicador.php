<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicador extends Model
{
    use HasFactory;

    protected $table = 'publicador';

    protected $fillable = [
        'nome',
        'morada',
        'telefone',
        'email',
        'recebido',
        'devolver',
        'territorio_id',
        'grupo_id',
    ];

    public function territorios()
    {
        return $this->hasOne('territorio');
    }

    public function grupos()
    {
        return $this->hasOne('grupo');
    }
}
