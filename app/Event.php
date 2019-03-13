<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function scopeCountry($query)
    {
  
    	$country = Country::where('code',app('config')->get('app.country'))->first();
    	if ($country) 
        {
            return $query->where('country_id',$country->id);
        }
    }
}
