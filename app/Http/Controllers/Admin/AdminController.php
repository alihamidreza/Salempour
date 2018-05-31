<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;



class AdminController extends Controller
{
    public function UploadImage($file)
    {
        $imagePath = "upload/images/";
        $fileName = $file->hashName();

        $file = $file->move(public_path($imagePath) , $fileName);

        $sizes = ["898" , "321"];
        $url['images'] = $this->resize($file->getRealPath() , $sizes , $imagePath , $fileName);
        @unlink($file->getRealPath());
        return $url;

    }

    protected function resize($path, $sizes, $imagePath, $fileName)
    {

        foreach ($sizes as $size){
            $images[$size] =  $imagePath . "{$size[0]}_" . $fileName;
            Image::make($path)->resize($size , null , function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path($images[$size]));
        }

        return $images;

    }
}
