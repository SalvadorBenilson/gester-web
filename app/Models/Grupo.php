<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupo';

    protected $fillable = [
        'numero',
        'quant_pub',
        'sup',
        'aju',
        'tel_sup',
        'tel_aju',
        'territorio_id',
    ];

    public function publicador()
    {
        return $this->belongsTo(Publicador::class);
    }

    public function territorio()
    {
        return $this->hasOne(Territorio::class);
    }
}
