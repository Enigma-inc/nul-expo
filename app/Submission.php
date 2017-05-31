<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected  $guarded =['id'];

    public  function  owner()
    {
        return $this->belongsTo(User::class);
    }

    public function fullName()
    {
        return  $this->title." ".$this->name." ".$this->surname;
    }
    public function abstracts()
    {
        return $this->hasMany(AbstractDoc::class);
    }
}
