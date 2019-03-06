<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
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
