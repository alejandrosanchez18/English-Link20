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


// Relaciones
      public function courses(){
          return $this->belongsToMany(Course::class);
    }

      public function payments(){
        return $this->hasMany(Payment::class);
  }

      public function grades(){
       return $this->hasMany(Grade::class);
 }

      public function roles()
   {
       return $this->belongsToMany(Role::class)->withTimestamps();
   }




   // Roles
      public function authorizeRoles($roles){
          if ($this->hasAnyRole($roles)) {
              return true;
          }
          abort(401, 'Esta acción no está autorizada.');
    }

      public function hasAnyRole($roles)
      {
          if (is_array($roles)) {
              foreach ($roles as $role) {
                  if ($this->hasRole($role)) {
                      return true;
                  }
              }
          } else {
              if ($this->hasRole($roles)) {
                  return true;
              }
          }
          return false;
      }

      public function hasRole($role)
      {
          if ($this->roles()->where('name', $role)->first()) {
              return true;
          }
          return false;
      }


}
