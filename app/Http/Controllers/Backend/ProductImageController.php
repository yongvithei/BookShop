<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class ProductImageController extends Controller
{
    public function store(Request $request){
        if (!empty($request->image)) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();

            $productImage = new ProductImage();
            $productImage->name = 'NULL';
            $productImage->product_id = $request->product_id;
            $productImage->save();

            $imageName = $productImage->id.'.'.$ext;
            $productImage->name = $imageName;
            $productImage->save();

            // First Thumbnail
            $sourcePath = $image->getPathName();
            $destPath = public_path('uploads/products/small/'.$imageName);
            $img = Image::make($sourcePath);
            $img->fit(250,400);
            $img->save($destPath);
            return response()->json([
                'status' => true,
                'image_id' => $productImage->id,
                'name' => $imageName,
                'imagePath' => asset('uploads/products/small/'.$imageName)
            ]);
        }
    }
    public function destroy($image_id, Request $request){
        $image = ProductImage::find($image_id);

        if (empty($image)) {
            $request->session()->flash('error','Image not found');
            return response()->json([
                'status' => false
            ]);
        }
        File::delete(public_path('uploads/products/small/'.$image->name));
        $image->delete();
        $request->session()->flash('success','Image deleted successfully');
        return response()->json([
            'status' => true
        ]);
    }
}
