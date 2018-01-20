<?php
namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class GalleryImageTransformer extends \Themsaid\Transformers\AbstractTransformer
{

    public function transformModel(Model $item)
    {
        $output = [
            'caption' => $item->caption?$item->caption:'',
            'image'=> Storage::disk('s3')->url($item->image),
            'thumbnail'=> Storage::disk('s3')->url($item->thumbnail),
            

        ];

        return $output;
    }
}
