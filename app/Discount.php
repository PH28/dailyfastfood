<?php

namespace Food;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'percent_discount', 'date_start', 'date_end', 'product_id',
    ];

    public function product ()
    {
    	return $this->belongsTo('Food\Product');
    }
}
