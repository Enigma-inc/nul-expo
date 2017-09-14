<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function submission()
   {
       return $this->hasOne(Submission::class);

   }

   public function fullName()
   {
       return  $this->submission->title." ".$this->submission->name." ".$this->submission->surname;
   }
   public function email()
   {
       return  $this->email;
   }
}
