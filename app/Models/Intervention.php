<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Intervention
 *
 * @property $id
 * @property $center_id
 * @property $group_id
 * @property $intervention_date
 * @property $tools
 * @property $description
 * @property $opportunity_areas
 * @property $created_at
 * @property $updated_at
 *
 * @property Center $center
 * @property Group $group
 * @property Interventiondetail[] $interventiondetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Intervention extends Model
{
    
    static $rules = [
		'intervention_date' => 'required',
		'tools' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['center_id','group_id','intervention_date','tools','description','opportunity_areas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function center()
    {
        return $this->hasOne('App\Models\Center', 'id', 'center_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function group()
    {
        return $this->hasOne('App\Models\Group', 'id', 'group_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interventiondetails()
    {
        return $this->hasMany('App\Models\Interventiondetail', 'intervention_id', 'id');
    }
    

}
