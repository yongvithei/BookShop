<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategoryView;
use App\Models\SubCategory;
class SubCategoryController extends Controller
{
    public function index()
    {

    if (request()->ajax()) {
        return datatables()->of(SubCategoryView::select(['*']))
            ->addColumn('action', 'backend.subcategory.sub_action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
    }
        $categories = Category::select('id', 'name')->get();

        return view('backend.subcategory.subcategory',compact('categories'));

    }

    public function store(Request $request)
    {
        $itemId = $request->id;
        $item =  SubCategory::updateOrCreate(
                    [
                     'id' => $itemId
                    ],
                    [
                    'sub_name' => $request->sub_name,
                    'cat_id' => $request->cat_id,
                    'sub_slug' => strtolower(str_replace(' ', '-',$request->sub_name)),
                    'status' => $request->status,
                    ]);

        return Response()->json($item);
    }

    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = SubCategory::where($id)->first();
        return Response()->json($item);
    }

    public function destroy(Request $request)
    {
    $item = SubCategory::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    $deleted = $item->delete();

    return Response()->json($item);
    }

    public function GetSubCategory($category_id){
        $subcat = SubCategory::where('cat_id',$category_id)->orderBy('sub_name','ASC')->get();
            return json_encode($subcat);
    }

}
