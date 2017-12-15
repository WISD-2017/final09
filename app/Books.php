<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=[
        'book_id',
        'book_name',
        'inventory',
        'ISBN',
        'category_id',
        'text',
        'price',
    ];
    protected $table="books";
public function Bookcategury(){
    return $this->hasOne(Bookcategory::class);
}
public function Order(){
    return $this->belongsTo(Order::class);
}
}
