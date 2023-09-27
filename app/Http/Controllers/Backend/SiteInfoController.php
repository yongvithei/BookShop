<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;
class SiteInfoController extends Controller
{
    public function show()
    {
        $item = SiteInfo::latest()->first();

        if ($item) {
            return response()->json($item);
        } else {
            return response()->json(null);
        }
    }
    public function store(Request $request)
{

    $itemId = $request->input('id');

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'support_phone' => 'required|string|max:255',
        'email' => 'string|max:255',
        'address' => 'required|string|max:555',
        'facebook' => 'string|max:255',
        'telegram' => 'string|max:255',
        'information' => 'required|string|max:555',
        'map' => 'string|max:1000',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($itemId) {
        // Update an existing item
        $item = SiteInfo::findOrFail($itemId);
        $item->update($validatedData);
        $message = 'Item updated successfully.';
    } else {
        // Create a new item
        $item = SiteInfo::create($validatedData);
        $message = 'Item created successfully.';
    }

    // Handle the image upload or assign default image
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $item->image = $imageName;
        $item->save();
    } elseif (!$itemId) {
        // Assign a default image if no image was uploaded and it's a new item
        $item->image = 'defaultimage.png'; // Replace with the path to your default image
        $item->save();
    }

    return response()->json(['item' => $item, 'message' => $message], 200);
}
}
