<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AbstractDoc extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $appends = array('fullDocPath');

    protected $dates = ['deleted_at'];

    public function submission(){
        return  $this->belongsTo(Submission::class);
    }

    public function getfullDocPathAttribute(){
           return url('/submitted-abstracts/'.$this->doc_path);
    }
}
