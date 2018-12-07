<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
      protected $fillable = ['course_id'
          ,'user_id'
          ,'term'
          ,'paper1'
          ,'paper2'
          ,'paper3'
          ,'paper4',
          'description'
      ];
      public function user(){
            $this->belongsTo(User::class);
     }
}
