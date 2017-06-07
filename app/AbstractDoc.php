<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractDoc extends Model
{
    protected $guarded=['id'];
    protected $appends = array('fullDocPath');

    public function submission(){
        return  $this->belongsTo(Submission::class);
    }

    public function getfullDocPathAttribute(){
           return url('/submitted-abstracts/'.$this->doc_path);
    }
}
