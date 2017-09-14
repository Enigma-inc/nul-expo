<?php
namespace App\Transformers;

use  Illuminate\Database\Eloquent\Model;

class SubmissionExportTransformer extends \Themsaid\Transformers\AbstractTransformer{

    public function transformModel(Model $item)
    {
        $output = [
            'Title'		=> $item->title,
            'Name'		=> $item->name,
            'Surname'		=> $item->surname,
            'Email'=>$item->owner->email,
            'Phone'=>$item->phone_code.' '.$item->phone,
            'Organisation'=>$item->organisation,
            'Country'=>$item->country,
            'Organisation'=>$item->organisation
        ];

        return $output;
    }
}
