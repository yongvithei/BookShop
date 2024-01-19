<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\QueryException;
class RoleController extends Controller
{
    //Role
    public function index()
    {
        $roles = Role::select('id', 'name')->get();
        $permissions = Permission::select('id', 'name')->get();
        if(request()->ajax()) {
            return datatables()->of(Role::select(['id', 'name','status']))
                ->addColumn('action', 'backend.role.role_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.role.role&permission',compact('roles','permissions'));
    }

    public function store(Request $request)
    {
        try {
            $itemId = $request->idR;
            $item = Role::updateOrCreate(
                [
                    'id' => $itemId
                ],
                [
                    'name' => $request->name,
                    'status' => $request->status,
                ]);

            return response()->json(['success' => true, 'message' => __('crud.record_saved')]);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Duplicate role name. Please choose a different name.'], 422);
        }
    }

    public function edit(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Role::where($id)->first();
        return Response()->json($item);
    }


    public function destroy(Request $request)
    {
        $item = Role::find($request->id);

        if (!$item) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $deleted = $item->delete();

        return Response()->json($item);
    }



}
