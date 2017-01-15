<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* this is the model for an organization (club, etc.)
*/
class Org extends Model
{
    protected $fillable = [
    	'name', 'description', 'email', 'url', 'pillars'
    ];

    protected $hidden = [
    	'password'
    ];

    public function users(){
    	return $this->belongsToMany('App\User');
    }

    public function events(){
    	return $this->hasMany('App\Event');
    }
}
