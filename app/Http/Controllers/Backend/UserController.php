<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(User::where('role', 'user')
                ->select(['id', 'name', 'email', 'last_seen']))
                ->addColumn('action', 'backend.user.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }        
        return view('backend.user.user');
    }
    public function view(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = User::where($id)->first();
        return Response()->json($item);
    }
    public function checkUserOnline($userId) {
        $isOnline = Cache::has('user-is-online' . $userId);
        return response()->json(['isOnline' => $isOnline]);
    }
}
