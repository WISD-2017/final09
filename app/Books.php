<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table="{product}";
public function Bookcategury(){
    return $this->hasOne(Bookcategury::class);
}
public function Order(){
    return $this->belongsTo(Order::class);
}
}
