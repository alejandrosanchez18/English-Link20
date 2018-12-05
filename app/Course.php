<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

      protected $fillable = [
          'name', 'description', 'price',
      ];


    public function users()
    {
          return $this->belongsToMany(User::class);
   }
}
