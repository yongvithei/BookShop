<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PosOrder;
use App\Models\PosOrderItem;
use App\Http\Requests\OrderStoreRequest;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerView;
use App\Models\SiteInfo;
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
        $info = SiteInfo::latest()->value('exchange');
        $order = PosOrder::with('customerId')->where('id',$order_id)->first();
        $orderItem = PosOrderItem::with('productId')->where('pos_order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = PDF::loadView('backend.pos.invoice', compact('order','orderItem','info'),[], [
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
    public function PreviewOrderInvoice($order_id){
        $info = SiteInfo::latest()->first();
        $order = PosOrder::with('customerId','userId')->where('id',$order_id)->first();
        $orderItem = PosOrderItem::with('productId')->where('pos_order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = PDF::loadView('backend.pos.invoice', compact('order','orderItem','info'),[], [
            'format' => 'A5',
            'title' => 'PDF',
            'default_font' => 'khmeros',
            'display_mode' => 'fullpage',
            'margin_bottom' => 10,
            'auto_language_detection' => true,
            'temp_dir' => storage_path('app'),
        ]);
        return $pdf->stream('invoice.pdf');
    }
    public function indexOrder(){
        if (request()->ajax()) {
            return datatables()->of(CustomerView::select(['*']))
                ->addColumn('action', 'backend.pos.actiono')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
}
