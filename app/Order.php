<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    protected $fillable=['id','book_id','discount','quantity','principal','member_id'];
    public function Books(){
        return $this->hasMany(Boosk::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
