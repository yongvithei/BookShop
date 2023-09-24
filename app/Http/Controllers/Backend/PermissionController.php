<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoleView;
use Spatie\Permission\Models\Role;
class PermissionController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(RoleView::select(['*']))
                ->addColumn('action', 'backend.role.per_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.role.role&permission');
    }
    public function store(Request $request)
    {
        $role_id =$request->role_id ;
        $role = Role::findOrFail($role_id);
        $permissions = $request->permission;
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
         }
        return redirect()->route('all.role');
    }

    public function edit(Request $request)
    {
        $roles = Role::select('id', 'name')->get();
        $id = $request->id;
        $role = Role::find($id);
       
        return response()->json(['role' => $role, ' $roles' => $roles]);
    }

}
