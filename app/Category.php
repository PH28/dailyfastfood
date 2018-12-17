<?php

namespace Food;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name', 'parent_id',
    ];

    public function products ()
    {
    	return $this->hasMany('Food\Product');
    }

    public function childs ()
    {
		return $this->hasMany('Food\Category, parent_id');
	}

	public function parent ()
	{
 		return $this->belongsto('Food\Category, category_id');
	}
   
}
