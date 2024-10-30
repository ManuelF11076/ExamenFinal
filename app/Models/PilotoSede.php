<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PilotoSede
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $direccion_id
 *
 * @property Direccione $direccione
 * @property Piloto[] $pilotos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PilotoSede extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'direccion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function direccione()
    {
        return $this->belongsTo(\App\Models\Direccione::class, 'direccion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pilotos()
    {
        return $this->hasMany(\App\Models\Piloto::class, 'id', 'piloto_id');
    }
    
}
