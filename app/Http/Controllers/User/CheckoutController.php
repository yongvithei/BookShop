<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use App\Models\SiteInfo;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Auth;

class CheckoutController extends Controller
{
    public function DistrictGetAjax($division_id){
        $ship = ShipDistrict::where('city_id', $division_id)
            ->where('status', 1)
            ->orderBy('name', 'ASC')
            ->get();
        return json_encode($ship);
    }
    public function CheckoutStore(Request $request){
        $exchangeRate = SiteInfo::latest()->value('exchange');
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();
        $dollar = number_format(Cart::total() / $exchangeRate, 2, '.', '');
        $data = array();
        $data['ship_name'] = $request->ship_name;
        $data['ship_email'] = $request->ship_email;
        $data['ship_phone'] = $request->ship_phone;
        $data['post_code'] = $request->post_code;
        $data['city_id'] = $request->city_id;
        $data['district_id'] = $request->district_id;
        $data['notes'] = $request->notes;

        return view('frontend.payment.stripe',compact('data','cartTotal','cartQty','carts','dollar'));
    }
}
