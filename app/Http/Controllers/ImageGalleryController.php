<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use App\GalleryImage;
use App\Transformers\GalleryImageTransformer;
use App\Events\GalleryImageAddedEvent;

class ImageGalleryController extends Controller
{
    protected $disk;
    function __construct()
    {
        $this->disk = Storage::disk('s3');
    }


    public function index(Request $request,$count=6)
    {
        // $images = GalleryImage::where('status', '=', $status)->get();
        
        if ($request->wantsJson()) {
            $images = GalleryImage::latest()->take($count)->get();
            return GalleryImageTransformer::transform($images);
        }
         
        $images=GalleryImage::latest()->take(30)->paginate(8);
        return view('admin.events.gallery.index')->with(['images'=>$images]);
    }

    
    public function add()
    {
        return view('admin.events.gallery.add-image');
    }

    public function upload(Request $request)
    {

        
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);
        $image = $request->file('file');
        $currentTime = time();
        $imagePath = "images/gallery/" . $currentTime . '.' . $image->getClientOriginalExtension();
        $thumnailPath = "images/thumbnails/" . $currentTime . '-thumbnail.' . $image->getClientOriginalExtension();
        $resizedAvatar = $this->resizeAvatar($image, $imagePath, $thumnailPath);

        GalleryImage::create([
            'caption'=>request('caption'),
            'image'=>$imagePath,
            'thumbnail'=> $thumnailPath
        ]);

         broadcast(new GalleryImageAddedEvent());
        return Response::json(['Image Uploaded'], 200);

    }

    private function resizeAvatar(UploadedFile $image, $imagePath, $imageThumnailPath)
    {
       //Resize Image
               // dd(sprintf("%/%s", $this->baseDir, $this->$image));

        $imageStream = Image::make($image)
            ->fit(800)
            ->stream()
            ->detach();

        //Create a thumbnail
        $imageThumbnailStream = Image::make($image)
            ->fit(150)
            ->stream()
            ->detach();

        //Push Files to Storage
        $this->disk->put($imagePath, $imageStream, 'public');
        $this->disk->put($imageThumnailPath, $imageThumbnailStream, 'public');
    }
}
