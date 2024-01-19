<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index()
{
        if (request()->ajax()) {
            return datatables()->of(Slider::select(['id', 'name', 'image','status']))
                ->addColumn('action', 'backend.promo.sli_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.promo.promo');
    }
       public function store(Request $request)
{
    $itemId = $request->id;

    $request->validate([
        'name' => 'required|string|max:255',
        'status' => 'required|in:Active,Inactive',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Check if an image was uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();

        // Resize the image to your desired dimensions
        $resizeWidth = 1400; // Adjust to your desired width
        $resizeHeight = 600; // Adjust to your desired height
        $resizedImage = Image::make($image)->resize($resizeWidth, $resizeHeight)->encode();

        // Store the resized image
        Storage::put('public/sliders/' . $fileName, $resizedImage);

        // Update or create the slider record
        $item = Slider::updateOrCreate(
            ['id' => $itemId],
            [
                'name' => $request->name,
                'image' => $fileName,
                'status' => $request->status,
            ]
        );
    } else {
        // No new image uploaded, use the existing image
        $item = Slider::updateOrCreate(
            ['id' => $itemId],
            [
                'name' => $request->name,
                'image' => $request->image_hidden,
                'status' => $request->status,
            ]
        );
    }

    return response()->json(['success' => true, 'message' => __('crud.record_saved')]);
}


    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Slider::where($id)->first();
        return Response()->json($item);
    }

    public function destroy(Request $request)
    {
    $item = Slider::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'Slider not found'], 404);
    }
    $deleted = $item->delete();
    return Response()->json($item);
    }
}
