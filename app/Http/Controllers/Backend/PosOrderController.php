<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PosOrder;
use App\Models\PosOrderItem;
use App\Http\Requests\OrderStoreRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
class PosOrderController extends Controller
{
    public function index() {
        if (request()->wantsJson()) {
            $id = auth()->user()->id; // Get the authenticated user's id
            $latestOrders = PosOrder::where('user_id', $id) // Assuming user_id is the foreign key for user
                ->latest()
                ->limit(6)
                ->get();
    
            return response($latestOrders);
        }
    }
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
    public function OrderInvoice($order_id){

        $order = PosOrder::with('customerId')->where('id',$order_id)->first();
        $orderItem = PosOrderItem::with('productId')->where('pos_order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = Pdf::loadView('backend.pos.invoice', compact('order','orderItem'))->setPaper('a4')->setOption([
                'tempDir' => public_path(),
                'chroot' => public_path(),
        ]);
        return $pdf->download('invoice.pdf');

    }
    public function PreviewOrderInvoice($order_id){

        $order = PosOrder::with('customerId','userId')->where('id',$order_id)->first();
        $orderItem = PosOrderItem::with('productId')->where('pos_order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = Pdf::loadView('backend.pos.invoice', compact('order','orderItem'))->setPaper('a4')->setOption([
                'tempDir' => public_path(),
                'chroot' => public_path(),
        ]);
        return $pdf->stream('invoice.pdf');
    }
}
