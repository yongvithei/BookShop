<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\TempImage;
class TempImageController extends Controller
{
    public function store(Request $request){
        if (!empty($request->image)) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();

            $tempImage = new TempImage();
            $tempImage->name = 'NULL';
            $tempImage->save();

            $imageName = $tempImage->id.'.'.$ext;

            $tempImage->name = $imageName;
            $tempImage->save();

            $image->move(public_path('uploads/temp/'),$imageName);

            // Create Thumbnail
            $sourcePath = public_path('uploads/temp/'.$imageName);
            $destPath = public_path('uploads/temp/thumb/'.$imageName);
            $img = Image::make($sourcePath);
            $img->fit(250,400);
            $img->save($destPath);
            
            return response()->json([
                'status' => true,
                'image_id' => $tempImage->id,
                'name' => $imageName,
                'imagePath' => asset('uploads/temp/thumb/'.$imageName)
            ]);
        }
    }
}
