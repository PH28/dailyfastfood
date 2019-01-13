<?php

namespace Food;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date', 'status', 'address', 'phone', 'total_price', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('Food\User');
    }

    public function orderDetails()
    {
        return $this->hasMany('Food\OrderDetail');
    }
}
