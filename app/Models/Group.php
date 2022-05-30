<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 *
 * @property $id
 * @property $grouptype_id
 * @property $manager_id
 * @property $submanager_id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Grouptype $grouptype
 * @property Intervention[] $interventions
 * @property Volunteer[] $volunteers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Group extends Model
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
    protected $fillable = ['grouptype_id','manager_id','submanager_id','name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grouptype()
    {
        return $this->hasOne('App\Models\Grouptype', 'id', 'grouptype_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interventions()
    {
        return $this->hasMany('App\Models\Intervention', 'group_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function volunteers()
    {
        return $this->hasMany('App\Models\Volunteer', 'group_id', 'id');
    }


}
