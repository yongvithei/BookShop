<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/sliders', $fileName);
        } else {
            $fileName = $request->image_hidden;
        }

        $item =  Slider::updateOrCreate(
            [
                'id' => $itemId
            ],
            [
                'name' => $request->name,
                'image' => $fileName,
                'status' => $request->status,
            ]
        );

        return response()->json($item);
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
