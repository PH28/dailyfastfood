<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'content', 'comment_id', 'product_id', 'user_id',
    ];

    public function user ()
    {
    	return $this->belongsTo('App\User');
    }

    public function product ()
    {
    	return $this->belongsTo('App\Product');
    }
}
