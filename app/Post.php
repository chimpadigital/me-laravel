<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    	'name','description','cover_image','category_id', 'country_id', 'summary', 'tags'
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class)->withTrashed();
    }

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function scopeCategoryFilter($query,$id)
    {
        if ($id) 
        {
            return $query->where('category_id',$id);
        }
            
    }
}
