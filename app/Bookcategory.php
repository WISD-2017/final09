<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookcategory extends Model
{
    protected $fillable=[
        'category_id',
        'category_name',
    ];

    protected $table="bookcategory";
    public function Books() {
        return $this->belongsTo(Books::class);
    }

}
