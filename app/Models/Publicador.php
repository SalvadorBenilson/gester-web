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

    public function territorio()
    {
        return $this->hasOne(Territorio::class);
    }

    public function grupo()
    {
        return $this->hasOne(Grupo::class);
    }
}
