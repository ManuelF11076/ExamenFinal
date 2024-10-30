<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direccione
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property PilotoSede[] $pilotoSedes
 * @property PilotoViaje[] $pilotoViajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Direccione extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pilotoSedes()
    {
        return $this->hasMany(\App\Models\PilotoSede::class, 'id', 'direccion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pilotoViajes()
    {
        return $this->hasMany(\App\Models\PilotoViaje::class, 'id', 'direccion_id');
    }
    
}
