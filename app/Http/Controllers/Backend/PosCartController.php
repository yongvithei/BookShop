<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PosCartController extends Controller
{
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            return response(
                $request->user()->cart()->get()
            );
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'barcode' => 'required|exists:products,pro_code',
        ]);
        $barcode = $request->barcode;

        $product = Product::where('pro_code', $barcode)->first();
        $cart = $request->user()->cart()->where('pro_code', $barcode)->first();
        if ($cart) {
            // check product quantity
            if ($product->pro_qty <= $cart->pivot->pro_qty) {
                return response([
                    'message' => 'Product available only: ' . $product->pro_qty,
                ], 400);
            }
            // update only quantity
            $cart->pivot->pro_qty = $cart->pivot->pro_qty + 1;
            $cart->pivot->save();
        } else {
            if ($product->pro_qty < 1) {
                return response([
                    'message' => 'Product out of stock',
                ], 400);
            }
            $request->user()->cart()->attach($product->id, ['pro_qty' => 1]);
        }

        return response('', 204);
    }
    public function delete(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id'
        ]);
        $request->user()->cart()->detach($request->product_id);

        return response('', 204);
    }
    public function empty(Request $request)
    {
        $request->user()->cart()->detach();

        return response('', 204);
    }
    public function changeQty(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'pro_qty' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);
        $cart = $request->user()->cart()->where('id', $request->product_id)->first();

        if ($cart) {
            // check product quantity
            if ($product->pro_qty < $request->pro_qty) {
                return response([
                    'message' => 'Product available only: ' . $product->pro_qty,
                ], 400);
            }
            $cart->pivot->pro_qty = $request->pro_qty;
            $cart->pivot->save();
        }

        return response([
            'success' => true
        ]);
    }
}
