<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\ShipCity;
use App\Models\SiteInfo;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Auth;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id){
        if(Session::has('coupon')){
            Session::forget('coupon');
        }
        $product = Product::findOrFail($id);
        if ($product->discount_price == NULL) {
            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->price,
                'weight' => 1,
                'options' => [
                    'image' => $product->thumbnail,
                ],
            ]);
        return response()->json(['success' => 'Successfully Added on Your Cart' ]);
        }else{
            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->thumbnail,
                ],
            ]);
        return response()->json(['success' => 'Successfully Added on Your Cart' ]);
        }

    }
    public function AddToCartDetails(Request $request, $id){
        if(Session::has('coupon')){
            Session::forget('coupon');
        }
        $product = Product::findOrFail($id);
        if ($product->discount_price == NULL) {
            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->price,
                'weight' => 1,
                'options' => [
                    'image' => $product->thumbnail,
                ],
            ]);
        return response()->json(['success' => 'Successfully Added on Your Cart' ]);
        }else{
            Cart::add([
                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->thumbnail,
                ],
            ]);
        return response()->json(['success' => 'Successfully Added on Your Cart' ]);
        }

    }
    public function AddMiniCart(){
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal
        ));
    }
    public function RemoveMiniCart($rowId){
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Remove From Cart']);

    }
    public function MyCart(){
        return view('frontend.mycart.view_mycart');
    }
    public function GetCartProduct(){
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,
        ));
    }
    public function CartRemove($rowId){
        Cart::remove($rowId);

         if(Session::has('coupon')){
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('name',$coupon_name)->first();

           Session::put('coupon',[
                'coupon_name' => $coupon->name,
                'coupon_discount' => $coupon->discount,
                'discount_amount' => round(Cart::total() * $coupon->discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->discount/100 )
            ]);
        }
        return response()->json(['success' => 'Successfully Remove From Cart']);

    }
    public function CartDecrement($rowId){

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty -1);



        if(Session::has('coupon')){
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('name',$coupon_name)->first();

           Session::put('coupon',[
                'coupon_name' => $coupon->name,
                'coupon_discount' => $coupon->discount,
                'discount_amount' => round(Cart::total() * $coupon->discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->discount/100 )
            ]);
        }
        return response()->json('Decrement');
    }
    public function CartIncrement($rowId){

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty +1);



        if(Session::has('coupon')){
            $coupon_name = Session::get('coupon')['coupon_name'];
            $coupon = Coupon::where('name',$coupon_name)->first();

            Session::put('coupon',[
                'coupon_name' => $coupon->name,
                'coupon_discount' => $coupon->discount,
                'discount_amount' => round(Cart::total() * $coupon->discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->discount/100 )
            ]);
        }
        return response()->json('Increment');

    }
   public function CouponApply(Request $request){
        $coupon = Coupon::where('name',$request->coupon_name)->where('validity','>=',Carbon::now()->format('Y-m-d'))->first();

        if ($coupon) {
            Session::put('coupon',[
                'coupon_name' => $coupon->name,
                'coupon_discount' => $coupon->discount,
                'discount_amount' => round(Cart::total() * $coupon->discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->discount/100 )
            ]);

            return response()->json(array(
                'validity' => true,
                'success' => 'Coupon Applied Successfully'

            ));


        } else{
            return response()->json(['error' => 'Invalid Coupon']);
        }

    }
    public function CouponCalculation(){
        $exchangeRate = SiteInfo::latest()->value('exchange');

        if (Session::has('coupon')) {

            return response()->json(array(
             'subtotal' => Cart::total(),
             'coupon_name' => session()->get('coupon')['coupon_name'],
             'coupon_discount' => session()->get('coupon')['coupon_discount'],
             'discount_amount' => session()->get('coupon')['discount_amount'],
             'total_amount' => session()->get('coupon')['total_amount'],
             'dollar' => number_format(session()->get('coupon')['total_amount'] / $exchangeRate, 2),
            ));
        }else{
            return response()->json(array(
                'total' => Cart::total(),
                'rate' => $exchangeRate,
            ));
        }
    }
    public function CouponRemove(){

        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successfully']);

    }
    public function CheckoutCreate(){
        $exchangeRate = SiteInfo::latest()->value('exchange');
        if (Auth::check()) {
            if (Cart::total() > 0) {
            $carts = Cart::content();
            $cartQty = Cart::count();
            $cartTotal = Cart::total();
            $dollar = number_format(Cart::total() / $exchangeRate, 2, '.', '');
            $cities = ShipCity::orderBy('name','ASC')->get();
            return view('frontend.checkout.checkout_view',compact('carts','cartQty','cartTotal','cities','dollar'));
            }else{
                $notification = array(
                'message' => 'Shopping At list One Product',
                'alert-type' => 'error'
            );
            return redirect()->to('/')->with($notification);
            }
        }else{
             $notification = array(
            'message' => 'You Need to Login First',
            'alert-type' => 'error'
        );
        return redirect()->route('login')->with($notification);
        }
    }


}
