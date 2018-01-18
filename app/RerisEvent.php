<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RerisEvent extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillabe = ['title', 'room', 'time', 'session_title', 'keynote', 'chair', 'chair_country', 
                          'chair_country_flag', 'presenter', 'presenter_country', 'presenter_country_flag'];
}

