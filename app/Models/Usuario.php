<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'nombre',
        'apellido'
    ];

    public function direccion(){
        return $this->hasOne('App\Models\Direccione');
    }
}
