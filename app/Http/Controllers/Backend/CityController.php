<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipCity;
class CityController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(ShipCity::select(['id', 'name','status']))
                ->addColumn('action', 'backend.area.city_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $cities = ShipCity::select('id', 'name')->where('status', 1)->get();
        return view('backend.area.shiparea',compact('cities'));
    }
    public function store(Request $request)
    {
        $itemId = $request->id;
        $item =  ShipCity::updateOrCreate(
                    [
                     'id' => $itemId
                    ],
                    [
                    'name' => $request->name,
                    'status' => $request->status,
                    ]);
        return Response()->json($item);
    }
    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = ShipCity::where($id)->first();
        return Response()->json($item);
    }
    public function destroy(Request $request)
    {
    $item = ShipCity::find($request->id);
    if (!$item) {
        return response()->json(['message' => 'ShipCity not found'], 404);
    }
    $deleted = $item->delete();
    return Response()->json($item);
    }
}
