<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccione extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'calle',
        'numero',
        'cod_postal',
        'municipio',
        'usuario_id'
    ];

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
