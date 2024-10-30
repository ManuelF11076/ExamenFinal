<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PilotoViaje
 *
 * @property $id
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $direccion_id
 * @property $piloto_id
 *
 * @property Direccione $direccione
 * @property Piloto $piloto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PilotoViaje extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['observacion', 'direccion_id', 'piloto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function direccione()
    {
        return $this->belongsTo(\App\Models\Direccione::class, 'direccion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function piloto()
    {
        return $this->belongsTo(\App\Models\Piloto::class, 'piloto_id', 'id');
    }
    
}
