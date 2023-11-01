<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Yajra\DataTables\Exceptions\Exception;

class CustomerController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Customer::select(['*']))
                ->addColumn('action', 'backend.pos.actionc')
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/customer', $fileName);
        } else {
            $fileName = $request->hiphoto;
        }
        $item =  Customer::updateOrCreate(
            [
                'id' => $itemId
            ],
            [
                'name' => $request->name,
                'address' => $request->address,
                'contact' => $request->contact,
                'note' => $request->note,
                'photo' => $fileName,
                'status' => $request->status,
            ]
        );

        return response()->json($item);
    }
    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Customer::where($id)->first();
        return Response()->json($item);
    }

    public function destroy(Request $request)
    {
    $item = Customer::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'Partner not found'], 404);
    }
    $deleted = $item->delete();
    return Response()->json($item);
    }

    public function allCustommer()
    {
        if (request()->wantsJson()) {
            return response(
                Customer::all()
            );
        }
    }
}
