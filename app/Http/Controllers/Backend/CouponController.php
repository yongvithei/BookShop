<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
class CouponController extends Controller
{
    public function index()
    {
            if (request()->ajax()) {
                return datatables()->of(Coupon::select(['id', 'name', 'discount','validity','status']))
                    ->addColumn('action', 'backend.promo.cou_action')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
            return view('backend.promo.promo');
    }
        public function store(Request $request)
    {
            $itemId = $request->idC;
            $item =  Coupon::updateOrCreate(
                [
                    'id' => $itemId
                ],
                [
                    'name' => strtoupper($request->nameC),
                    'discount' => $request->discount,
                    'validity' => $request->validity,
                    'status' => $request->statusC,
                ]
            );
    
            return response()->json($item);
    }
    
    
    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Coupon::where($id)->first();
        return Response()->json($item);
    }
    
    public function destroy(Request $request)
        {
        $item = Coupon::find($request->id);
    
        if (!$item) {
            return response()->json(['message' => 'Slider not found'], 404);
        }
        $deleted = $item->delete();
        return Response()->json($item);
    }
}
