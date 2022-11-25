<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titulo',
        'texto',
        'usuario_id'
    ];

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }

    public function temas(){
        return $this->belongsToMany('App\Models\Tema');
    }
}
