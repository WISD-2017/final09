<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='{order}';
    protected $fillable=['order_id','book_id','quantity'];
    public $timestamps=true;
    
}
