<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'seller_name', 'location', 'seller_contact',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }
}
