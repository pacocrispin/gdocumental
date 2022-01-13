<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Documento extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['nombre','uuid', 'estado','numero','carpeta_id', 'creado_por_id'];
    
    

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

    public function setCarpetaIdAttribute($input)
    {
        $this->attributes['carpeta_id'] = $input ? $input : null;
    }

    public function carpeta()
    {
        return $this->belongsTo(Carpeta::class, 'carpeta_id')->withTrashed();
    }
    
}
