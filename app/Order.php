<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='{order}';
    protected $fillable=['order_id','book_id','quantity'];
    public $timestamps=true;
    public function author(){
        return $this->belongsTo(Order::class,'book_id','order_id');
    }
    public function postType(){
        return $this->hasOne(PostTypy::class,'id','Order_id');
    }
}
