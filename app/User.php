<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $guarded = [];
    // protected $fillable = [
    //     'first_name', 'email', 'password', 'last_name', 'dni', 'tel', 'role', 'adress'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function courses(){
          return $this->belongsToMany(Course::class);
   }
   public function payments(){
        return $this->hasMany(Payment::class);
  }
  public function grades(){
       return $this->hasMany(Grade::class);
}

}
