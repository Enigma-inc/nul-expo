<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RerisEvent extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillabe = ['title', 'room', 'time', 'body'];
}

