<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function AddToWishList(Request $request, $product_id){

        if (Auth::check()) {
            $exists = Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->first();

            if (!$exists) {
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                    'created_at' => Carbon::now(),
                ]);

                return response()->json(['success' => __('main.wishlist_add_success')]);
            } else {
                return response()->json(['error' => __('main.wishlist_add_error')]);
            }
        } else {
            return response()->json(['error' => __('main.wishlist_login_error')]);
        }


    }
    public function GetWishlistProduct() {
        $wishlist = Wishlist::with('product')->where('user_id', Auth::id())->latest()->get();
        $wishQty = Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['wishlist' => $wishlist, 'wishQty' => $wishQty]);
    }

    public function WishlistRemove($id){

        Wishlist::where('user_id',Auth::id())->where('id',$id)->delete();
        return response()->json(['success' => __('main.success_remove_product')]);
    }
}
