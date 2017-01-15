<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'title', 'description', 'when', 'facets', 'approved', 'org_id'
    ];

    public function org(){
    	return $this->belongsTo('App\Org');
    }
}
