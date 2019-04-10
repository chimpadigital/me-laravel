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

    public function scopeCountryFilter($query,$id)
    {
  
    	$country = Country::where('id',$id)->first();
    	
        if ($country && $country->code != 'all_countries') 
        {
            return $query->where('country_id',$country->id);
        }
    }
}
