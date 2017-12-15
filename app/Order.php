<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';

    public function Books(){
        return $this->hasMany(Boosk::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
