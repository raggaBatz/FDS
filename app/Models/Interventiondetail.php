<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Interventiondetail
 *
 * @property $id
 * @property $intervention_id
 * @property $volunteer_id
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Intervention $intervention
 * @property Volunteer $volunteer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Interventiondetail extends Model
{
    
    static $rules = [
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['intervention_id','volunteer_id','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function intervention()
    {
        return $this->hasOne('App\Models\Intervention', 'id', 'intervention_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function volunteer()
    {
        return $this->hasOne('App\Models\Volunteer', 'id', 'volunteer_id');
    }
    

}
