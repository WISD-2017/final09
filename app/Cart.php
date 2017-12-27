<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=[
        'id',
        'users_id',
        'book_name',
        'price'
    ];
}
