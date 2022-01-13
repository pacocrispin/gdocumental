<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'estado', 'eliminado', 'creado_por_id'];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedBIdyAttribute($input)
    {
        $this->attributes['creado_por_id'] = $input ? $input : null;
    }
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'creado_por_id');
    }
}
