<?php

namespace Food;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'quantity', 'order_id', 'product_id',
    ];

    public function order ()
    {
    	return $this->belongsTo('Food\Order');
    }

    public function product ()
    {
    	return $this->belongsTo('Food\Product');
    }
}
