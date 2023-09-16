<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Datatables;
class CategoryController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Category::select(['id', 'name', 'desc','status']))
                ->addColumn('action', 'backend.category.cat-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.category.category');

    }

    public function store(Request $request)
    {
        $itemId = $request->id;
        $item =  Category::updateOrCreate(
                    [
                     'id' => $itemId
                    ],
                    [
                    'name' => $request->name,
                    'desc' => $request->desc,
                    'status' => $request->status,
                    ]);

        return Response()->json($item);
    }

    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Category::where($id)->first();

        return Response()->json($item);
    }


    public function destroy(Request $request)
{
    $item = Category::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    $deleted = $item->delete();

    return Response()->json($item);
}

}
