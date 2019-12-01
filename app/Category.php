<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    public $guarded = [];

    public function events(){
        return $this->hasMany(Event::class);
    }
}


