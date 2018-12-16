<?php

namespace App;

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
    	return $this->belongsTo('App\Category');
    }

    public function orderDetails ()
    {
    	return $this->hasMany('App\OrderDetail');
    }

    public function discounts ()
    {
    	return $this->hasMany('App\Discount');
    }

    public function comments ()
    {
    	return $this->hasMany('App\Comment');
    }

    public function images ()
    {
    	return $this->hasMany('App\Image');
    }
}
