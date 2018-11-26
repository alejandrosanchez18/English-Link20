<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
      public function user(){
            $this->belongsTo(User::class);
     }
}
