<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $guarded = [];
    
    protected $fillable = [
        'name', 'email', 'message','subject',
    ];
}
