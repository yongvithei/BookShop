<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PosOrder;
use App\Http\Requests\OrderStoreRequest;
class PosOrderController extends Controller
{
    public function store(OrderStoreRequest $request)
    {
        $order = PosOrder::create([
            'customer_id' => $request->customer_id,
            'amount' => $request->amount,
            'received' => $request->received,
            'payment' => $request->payment,
            'note' => $request->note,
            'user_id' => $request->user()->id,
        ]);

        $cart = $request->user()->cart()->get();
        foreach ($cart as $item) {
            $order->items()->create([
                'price' => $item->price * $item->pivot->pro_qty,
                'pro_qty' => $item->pivot->pro_qty,
                'product_id' => $item->id,
            ]);
            $item->pro_qty = $item->pro_qty - $item->pivot->pro_qty;
            $item->save();
        }
        $request->user()->cart()->detach();
        return 'success';
    }
}
