<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\SiteInfo;
use Illuminate\Http\RedirectResponse;
use PDF;
class UserProfileController extends Controller
{
    public function editProfile(Request $request): View
    {
        return view('frontend.dashboard.account_details', [
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
            @unlink(public_path('uploads/user/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/user'), $filename);
            $data->photo = $filename;
        }

        $data->save();
        return Redirect::route('user.profile')->with('status', 'saved');
    }
    public function UserOrderPage(){
        $id = Auth::user()->id;
        $orders = Order::where('user_id',$id)->orderBy('id','DESC')->get();
        return view('frontend.dashboard.order',compact('orders'));
    }
    public function UserOrderDetails($order_id){
        $order = Order::with('city','district','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        return view('frontend.dashboard.order_detail',compact('order','orderItem'));
    }
    public function UserOrderInvoice($order_id){
        $info = SiteInfo::latest()->first();
        $order = Order::with('city','district','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = PDF::loadView('frontend.dashboard.order_invoice', compact('order','orderItem','info'),[], [
            'format' => 'A5',
            'title' => 'PDF',
            'default_font' => 'khmeros',
            'display_mode' => 'fullpage',
            'margin_bottom' => 10,
            'auto_language_detection' => true,
            'temp_dir' => storage_path('app'),
        ]);

        return $pdf->download('invoice.pdf');

    }
    public function OrderTracking(Request $request){

        $invoice = $request->code;

        $track = Order::where('invoice_no',$invoice)->first();

        if ($track) {
           return view('frontend.tracking.tracking_order',compact('track'));
        } else{
            return redirect()->back();
        }

    }


}
