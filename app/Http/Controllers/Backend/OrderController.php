<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Yajra\DataTables\Exceptions\Exception;
use App\Models\OrderView;
use App\Models\OrderItemView;
class OrderController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Order::where('status', 'pending')
                ->select(['id','invoice_no','order_date','amount','payment_method','status']))
                ->addColumn('action', 'backend.order.order_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
    public function viewDetail(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = OrderView::where($id)->first();
        return Response()->json($item);
    }
    public function getOrderItem(Request $request)
{
    $order_id = $request->input('id');
    $items = OrderItemView::where('order_id', $order_id)->get();

    return response()->json($items);
}


}
