<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleEtiqueta extends Model
{
    use HasFactory;

    protected $fillable = [

        'etiqueta_id',
        'documento_id'

    ];
}
