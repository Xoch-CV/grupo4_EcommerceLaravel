<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'shopping_carts';
    public $guarded = [];
}
