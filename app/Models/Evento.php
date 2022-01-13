<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\Service\Attribute\Required;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'require',
        'descripcion'=>'require',
        'start'=>'require',
        'end'=>'require'
    ];

    protected $fillable=['title','descripcion','start','end'];

}
