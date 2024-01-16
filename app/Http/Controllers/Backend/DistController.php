<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDistrict;
use App\Models\DistrictView;
use Yajra\DataTables\Exceptions\Exception;

class DistController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        if (request()->ajax()) {
            try {
                return datatables()->of(DistrictView::select(['id', 'name', 'dis_kh', 'city_name', 'ci_kh', 'status']))
                    ->addColumn('action', 'backend.area.dist_action')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            } catch (Exception $e) {
            }
        }

        return view('backend.area.shiparea');

    }
    public function store(Request $request)
    {
        $itemId = $request->idC;
        $item =  ShipDistrict::updateOrCreate(
                    [
                     'id' => $itemId
                    ],
                    [
                    'name' => $request->nameD,
                    'dis_kh' => $request->nameDKH,
                    'city_id' => $request->city_id,
                    'status' => $request->statusD,
                    ]);
        return response()->json(['success' => true, 'message' => __('crud.record_saved')]);
    }

    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = ShipDistrict::where($id)->first();
        return Response()->json($item);
    }

    public function destroy(Request $request)
    {
    $item = ShipDistrict::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'ShipDistrict not found'], 404);
    }

    $deleted = $item->delete();

    return Response()->json($item);
    }

}
