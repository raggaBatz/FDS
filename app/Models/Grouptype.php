<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grouptype
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Group[] $groups
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grouptype extends Model
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
    public function groups()
    {
        return $this->hasMany('App\Models\Group', 'grouptype_id', 'id');
    }
    

}
