<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Piloto
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $dpi
 * @property $sexo
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $piloto_id
 *
 * @property PilotoSede $pilotoSede
 * @property PilotoViaje[] $pilotoViajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piloto extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'telefono', 'dpi', 'sexo', 'piloto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pilotoSede()
    {
        return $this->belongsTo(\App\Models\PilotoSede::class, 'piloto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pilotoViajes()
    {
        return $this->hasMany(\App\Models\PilotoViaje::class, 'id', 'piloto_id');
    }
    
}
