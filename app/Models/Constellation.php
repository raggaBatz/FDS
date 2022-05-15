<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Constellation
 *
 * @property $id
 * @property $name
 * @property $descripción
 * @property $created_at
 * @property $updated_at
 *
 * @property Volunteer[] $volunteers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Constellation extends Model
{
    
    static $rules = [
		'name' => 'required',
		'descripción' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','descripción'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function volunteers()
    {
        return $this->hasMany('App\Models\Volunteer', 'constellation_id', 'id');
    }
    

}
