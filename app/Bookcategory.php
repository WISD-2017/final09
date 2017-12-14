<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookcategory extends Model
{
    protected $table="{bookcategory}";
    public function Books() {
        return $this->belongsTo(Books::class);
    }

}
