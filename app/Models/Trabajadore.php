<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trabajadore extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'codigo',
        'cedula',
        'nombre',
        'direccion',
        'telefono',
        'celular',
        'foto',
        'departamento_id',
        'cargo_id',
        'user_id',
    ];

    public function cargo(){
        return $this->belongsTo('App\Models\Cargo');
    }

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }
}
