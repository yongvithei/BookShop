<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\AdminView;
class AdminController extends Controller
{
    //crud function
    public function index()
    {

        if (request()->ajax()) {
            return datatables()->of(AdminView::select(['id', 'name', 'email', 'role_name']))
                ->addColumn('action', 'backend.role.admin_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $roles = Role::select('id', 'name')->get();
        return view('backend.role.admin_list',compact('roles'));
    }


    public function store(Request $request)
    {
        try {
            $itemId = $request->id;


        // For updating
        if ($itemId) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'username' => [
                    'required', 'string', 'max:255',
                    Rule::unique('users')->ignore($itemId),
                ],
                'email' => [
                    'required', 'string', 'email', 'max:255',
                    Rule::unique('users')->ignore($itemId),
                ],

            ]);

            $item = User::updateOrCreate(
                [
                    'id' => $itemId,
                ],
                [
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'role'=> "Admin",
                ]
            );
            $item->roles()->detach();
            if ($request->roles) {
                $item->assignRole($request->roles);
            }
        }else{
            // For creating
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', Rules\Password::defaults()],
            ]);

            $item = User::updateOrCreate(
                [
                    'id' => $itemId,
                ],
                [
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role'=> "Admin",

                ]

            );
            if ($request->roles) {
                $item->assignRole($request->roles);
            }
        }

            return response()->json(['message' => 'User saved successfully', 'user' => $item]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save user. Please try again.'], 500);
        }
    }


    public function edit(Request $request)
{
    $id = array('id' => $request->id);
    $user = User::where($id)->first();

    // Get the roles assigned to the user
    $userRoles = $user->getRoleNames()->toArray();

    return response()->json(['user' => $user, 'userRoles' => $userRoles]);
}

    public function delete(Request $request)
    {
    $item = User::find($request->id);

    if (!$item) {
        return response()->json(['message' => 'User not found'], 404);
    }

    $deleted = $item->delete();

    return Response()->json($item);
    }



    //another function

    public function AdminDashboard(){
        return view('admin.dashboard');
    }
    public function AdminLogin(){
        return view('admin.admin_login');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
