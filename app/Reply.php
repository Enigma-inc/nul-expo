<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    
    protected $fillable = [
        'name', 'email', 'reply','subject',
    ];

    public function replyOwner()
    {
        return $this->belongsTo(Query::class);
    }
}
