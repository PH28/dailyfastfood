<?php

namespace Food;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name', 'description', 'price', 'quantity', 'category_id',
    ];

    public function category ()
    {
    	return $this->belongsTo('Food\Category');
    }

    public function orderDetails ()
    {
    	return $this->hasMany('Food\OrderDetail');
    }

    public function discounts ()
    {
    	return $this->hasMany('Food\Discount');
    }

    public function comments ()
    {
    	return $this->hasMany('Food\Comment');
    }

    public function images ()
    {
    	return $this->hasMany('Food\Image');
    }
}
