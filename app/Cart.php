<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'carts';
    public $fillable = ['total_price'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function events(){
        return $this->belongsToMany(Event::class)->withTimestamps()
                                                ->withPivot('qty','price','total_event');
    }

    public function scopeOpen($q) 
    {
        return $q->whereNull('purchased_at');
    }
}
