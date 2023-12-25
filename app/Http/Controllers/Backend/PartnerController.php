<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
class PartnerController extends Controller
{
    public function index()
{
        if (request()->ajax()) {
            return datatables()->of(Partner::select(['*']))
                ->addColumn('action', 'backend.partner.part_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.partner.partner');
    }
        public function store(Request $request)
    {
        $fileName = 'default.jpg';
        $itemId = $request->id;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
        } else {
            $fileName = $request->avatar_hidden;
        }

        $item =  Partner::updateOrCreate(
            [
                'id' => $itemId
            ],
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'desc' => $request->desc,
                'avatar' => $fileName,
                'status' => $request->status,
            ]
        );

        return response()->json($item);
    }


    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Partner::where($id)->first();
        return Response()->json($item);
    }

    public function destroy(Request $request)
    {
    $item = Partner::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'Partner not found'], 404);
    }
    $deleted = $item->delete();
    return Response()->json($item);
    }
}
