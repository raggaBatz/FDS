<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Volunteer
 *
 * @property $id
 * @property $generation_id
 * @property $constellation_id
 * @property $group_id
 * @property $pseudonym
 * @property $pseudonym_plain
 * @property $names
 * @property $last_names
 * @property $phone
 * @property $birthday
 * @property $email
 * @property $contact_name
 * @property $contact_phone
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Constellation $constellation
 * @property Generation $generation
 * @property Group $group
 * @property Interventiondetail[] $interventiondetails
 * @property User[] $users
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Volunteer extends Model
{
    
    static $rules = [
		'pseudonym' => 'required',
		'pseudonym_plain' => 'required',
		'names' => 'required',
		'last_names' => 'required',
		'phone' => 'required',
		'birthday' => 'required',
		'email' => 'required',
		'contact_name' => 'required',
		'contact_phone' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['generation_id','constellation_id','group_id','pseudonym','pseudonym_plain','names','last_names','phone','birthday','email','contact_name','contact_phone','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function constellation()
    {
        return $this->hasOne('App\Models\Constellation', 'id', 'constellation_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function generation()
    {
        return $this->hasOne('App\Models\Generation', 'id', 'generation_id');
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
        return $this->hasMany('App\Models\Interventiondetail', 'volunteer_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User', 'volunteer_id', 'id');
    }
    

}
