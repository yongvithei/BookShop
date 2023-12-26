<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;
class SiteInfoController extends Controller
{

    public function show(){
        $item = SiteInfo::latest()->first();
        return view('backend.system.business',compact('item'));

    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'support_phone' => 'required|string|max:255',
            'email' => 'string|max:255',
            'address' => 'required|string|max:555',
            'facebook' => 'string|max:255',
            'telegram' => 'string|max:255',
            'exchange' => 'required|numeric|between:3835,4270',
            'information' => 'required|string|max:555',
            'map' => 'string|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Process the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($validatedData['image'])) {
                $oldImagePath = storage_path('app/public/' . $validatedData['image']);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('app/public/images'), $imageName);

            // Save the image path to the database or perform other actions
            $validatedData['image'] = 'images/' . $imageName;
        }
        $item = SiteInfo::updateOrCreate(['id' => $data['id']], $validatedData);

        return response()->json(['success' => true, 'message' => 'Record updated successfully']);
    }
    public function rate()
    {
        if (request()->wantsJson()) {
            $siteInfo = SiteInfo::select('exchange')->first();
            return response()->json(['exchange' => $siteInfo->exchange]);
        }
    }

}
