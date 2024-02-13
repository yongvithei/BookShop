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
use App\Models\Order;
use App\Models\SiteInfo;
use Spatie\Permission\Models\Role;
use App\Models\AdminView;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function editProfile(Request $request): View
    {
        return view('backend.profile.profile', [
            'user' => $request->user(),
        ]);
    }
    public function updateProfile(Request $request): RedirectResponse
{
        $id = Auth::user()->id;
        $data = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => ['required','string','max:255',
                Rule::unique(User::class)->ignore($id),
            ],
            'email' => ['required','string','email','max:255',
                Rule::unique(User::class)->ignore($id),
            ],
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data->name = $validatedData['name'];
        $data->username = $validatedData['username'];
        $data->email = $validatedData['email'];

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('uploads/admin/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin'), $filename);
            $data->photo = $filename;
        }

        $data->save();
        return Redirect::route('admin.profile.sp')->with('status', 'saved');
    }

    //crud.php function
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

        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->getMessageBag()->toArray();

            return response()->json(['error' => $errors], 422);
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
        $date = Carbon::today();
        $amount = Order::whereDate('created_at', $date)->where('status','delivered')->sum('amount');
        $pending = Order::where('status','pending')->whereDate('created_at', $date)->count();
        $order = Order::whereDate('created_at', $date)->count();
        // Retrieve other data
        $customer = User::where('role','user')->count();
        $rate = SiteInfo::select('exchange')->first();

        // Perform calculations
        $SellKH = $amount / $rate->exchange;
        $seAmount = number_format($SellKH, 2);

        // Pass data to the view
        return view('admin.dashboard')->with([
            'amount' => $amount,
            'pending' => $pending,
            'customer' => $customer,
            'seAmount' => $seAmount,
            'order' => $order,
        ]);
    }



    public function getSalesECM(Request $request)
    {
        // Get the selected time range from the request
        $timeRange = $request->input('time_range');

        // Initialize variables
        $amount = 0;
        $pending = 0;
        $order = 0;
        $seAmount = 0;
        $customer = 0;
        $rate = SiteInfo::select('exchange')->first();

        // Update your queries based on the selected time range
        switch ($timeRange) {
            case 'today':
                $str = __('part_s.todays_sale');
                // Get today's date
                $date = Carbon::today();
                // Retrieve data for today's sales
                $amount = Order::whereDate('created_at', $date)->where('status','delivered')->sum('amount');
                $pending = Order::where('status', 'pending')->whereDate('created_at', $date)->count();
                $order = Order::whereDate('created_at', $date)->count();
                // Retrieve other data for today
                $customer = User::where('role', 'user')->count();
                // Perform calculations for today
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);
                break;

            case 'yesterday':
                $str = __('part_s.yesterday_sell');
                $yesterday = Carbon::yesterday();
                $amount = Order::whereDate('created_at', $yesterday)->where('status','delivered')->sum('amount');
                $pending = Order::where('status', 'pending')->whereDate('created_at', $yesterday)->count();
                $order = Order::whereDate('created_at', $yesterday)->count();
                $customer = User::where('role', 'user')->count();
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);
                break;

            case 'last_month':
                $str = __('part_s.last_month');
                // Data for last month
                $lastMonth = Carbon::now()->subMonth(); // Get the first day of the previous month

                $amount = Order::whereDate('created_at', '>=', $lastMonth->startOfMonth())
                    ->whereDate('created_at', '<=', $lastMonth->endOfMonth())->sum('amount');
                $pending = Order::where('status', 'pending')->whereDate('created_at', '>=', $lastMonth->startOfMonth())
                    ->whereDate('created_at', '<=', $lastMonth->endOfMonth())->count();
                $order = Order::whereDate('created_at', '>=', $lastMonth->startOfMonth())
                    ->whereDate('created_at', '<=', $lastMonth->endOfMonth())->count();
                $customer = User::where('role', 'user')->count();
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);
                break;
            case 'last_3_months':
                $str = __('part_s.3_month_sale');
                // Data for last 3 months
                $last3MonthsStart = Carbon::now()->subMonths(2)->startOfMonth(); // Get the first day of the month 3 months ago
                $last3MonthsEnd = Carbon::now()->endOfMonth(); // Get the last day of the current month

                $amount = Order::whereDate('created_at', '>=', $last3MonthsStart)
                    ->whereDate('created_at', '<=', $last3MonthsEnd)->where('status','delivered')->sum('amount');
                $pending = Order::where('status', 'pending')->whereDate('created_at', '>=', $last3MonthsStart)
                    ->whereDate('created_at', '<=', $last3MonthsEnd)->count();
                $order = Order::whereDate('created_at', '>=', $last3MonthsStart)
                    ->whereDate('created_at', '<=', $last3MonthsEnd)->count();
                $customer = User::where('role', 'user')->count();
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);

                break;
            case 'this_year':
                $str = __('part_s.this_year_sale');
                // Data for this year
                $thisYearStart = Carbon::now()->startOfYear();
                $thisYearEnd = Carbon::now()->endOfYear();
                $amount = Order::whereDate('created_at', '>=', $thisYearStart)
                    ->whereDate('created_at', '<=', $thisYearEnd)->where('status','delivered')->sum('amount');
                $pending = Order::where('status', 'pending')->whereDate('created_at', '>=', $thisYearStart)
                    ->whereDate('created_at', '<=', $thisYearEnd)->count();
                $order = Order::whereDate('created_at', '>=', $thisYearStart)
                    ->whereDate('created_at', '<=', $thisYearEnd)->count();
                $customer = User::where('role', 'user')->count();
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);


                break;

            case 'last_year':
                $str = __('part_s.last_year_sale');
                // Data for last year
                $lastYearStart = Carbon::now()->subYear()->startOfYear();
                $lastYearEnd = Carbon::now()->subYear()->endOfYear();
                $amount = Order::whereDate('created_at', '>=', $lastYearStart)
                    ->whereDate('created_at', '<=', $lastYearEnd)->where('status','delivered')->sum('amount');
                $pending = Order::where('status', 'pending')->whereDate('created_at', '>=', $lastYearStart)
                    ->whereDate('created_at', '<=', $lastYearEnd)->count();
                $order = Order::whereDate('created_at', '>=', $lastYearStart)
                    ->whereDate('created_at', '<=', $lastYearEnd)->count();
                $customer = User::where('role', 'user')->count();
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);

                break;
            case 'all_time':
                $str = __('part_s.all_sale');
                $amount = Order::where('status','delivered')->sum('amount');
                $pending = Order::where('status', 'pending')->count();
                $order = Order::count();
                $customer = User::where('role', 'user')->count();
                $SellKH = $amount / $rate->exchange;
                $seAmount = number_format($SellKH, 2);
                break;
            // Add cases for other time ranges as needed
            default:
                // Handle the default case or additional time ranges
                break;
        }

        // Return the data as a JSON response
        return response()->json([
            'Amount' => $amount,
            'pending' => $pending,
            'order' => $order,
            'customer' => $customer,
            'seAmount' => $seAmount,
            'str' => $str,

            // Add more data as needed
        ]);
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
