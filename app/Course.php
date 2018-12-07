<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
// protected $guarded = [];
      protected $fillable = [
          'name', 'description', 'price', 'teacher_id'
      ];


    public function users()
    {
          return $this->belongsToMany(User::class);
    }
   
}
