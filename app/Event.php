<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';
    public $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function carts(){
        return $this->belongsToMany(Cart::class);
    }
}
