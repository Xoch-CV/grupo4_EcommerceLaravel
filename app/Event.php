<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';
    public $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
