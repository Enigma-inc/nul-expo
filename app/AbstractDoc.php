<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractDoc extends Model
{
    protected $guarded=['id'];

    public function submission(){
        return  $this->belongsTo(Submission::class);
    }
}
