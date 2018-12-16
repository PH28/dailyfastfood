<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'date', 'status', 'address', 'phone', 'total_price', 'user_id',
    ];

    public function user ()
    {
    	return $this->belongsTo('App\User');
    }

    public function orderDetails ()
    {
    	return $this->hasMany('App\OrderDetail');
    }
}
