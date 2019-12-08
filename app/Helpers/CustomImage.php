<?php

namespace App\Helpers;
use Image;
use Illuminate\Support\Facades\Storage;

class CustomImage 
{

	public static function storeImage($file, $path)
    {
        $img = 'img-' . time() . uniqid() . '.' . $file->getClientOriginalExtension();
        $imagePath = $file->storeAs($path, $img, 'public');

        $image = Image::make(Storage::get($imagePath));
  //       $image->resize(500, null, function ($constraint) {
		//     $constraint->aspectRatio();
		// });

        Storage::put($imagePath, (string) $image->encode());

        return [
            'name' => $img,
            'imagePath' => $imagePath,
        ];
    }

    public static function storeIcon($file, $path)
    {
        $img = 'img-' . time() . uniqid() . '.' . $file->getClientOriginalExtension();
        $imagePath = $file->storeAs($path, $img, 'public');

        $image = Image::make(Storage::get($imagePath))->encode('jpg', 50);
        $image->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::put($imagePath, (string) $image->encode());

        return [
            'name' => $img,
            'imagePath' => $imagePath,
        ];
    }

}