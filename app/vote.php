<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    public $timestamps = false;
    public function user(){
       return  $this->belongsTo(vote::class);
    }
}
