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
            return datatables()->of(ShipCity::select(['id', 'name','ci_kh','status']))
                ->addColumn('action', 'backend.area.city_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $cities = ShipCity::select('id', 'name', 'ci_kh')->where('status', 1)->get();
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
                    'ci_kh' => $request->name_kh,
                    'status' => $request->status,
                    ]);
        return response()->json(['success' => true, 'message' => __('crud.record_saved')]);
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
