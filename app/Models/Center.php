<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Center
 *
 * @property $id
 * @property $name
 * @property $address
 * @property $centertype_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Centertype $centertype
 * @property Intervention[] $interventions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Center extends Model
{
    
    static $rules = [
		'name' => 'required',
		'address' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','centertype_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centertype()
    {
        return $this->hasOne('App\Models\Centertype', 'id', 'centertype_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interventions()
    {
        return $this->hasMany('App\Models\Intervention', 'center_id', 'id');
    }
    

}
