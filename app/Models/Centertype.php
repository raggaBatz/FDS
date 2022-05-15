<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Centertype
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Center[] $centers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Centertype extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centers()
    {
        return $this->hasMany('App\Models\Center', 'centertype_id', 'id');
    }
    

}
