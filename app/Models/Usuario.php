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
        'apellido',
        'age',
        'email',
        'date_of_birth',
        'gender'
    ];

    public function direccion(){
        return $this->hasOne('App\Models\Direccione');
    }

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
