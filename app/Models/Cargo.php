<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
    ];


    //Relacion uno a muchos
    public function trabajadores(){
        return $this->hasMany('App\Models\Trabajadore');
    }
}
