<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Yajra\DataTables\Exceptions\Exception;
use App\Models\OrderView;
use App\Models\OrderItem;
use App\Models\OrderItemView;
use App\Models\Product; 
use Carbon\Carbon;
use DB;
class OrderController extends Controller
{
    /**
     * @throws Exception
     */
    public function index(){
        if (request()->ajax()) {
            return datatables()->of(Order::select(['id','invoice_no','order_date','amount','payment_method','status']))
                ->addColumn('action', 'backend.order.order_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
    public function indexpending(){
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
    public function indexconfirm(){
        if (request()->ajax()) {
            return datatables()->of(Order::where('status', 'confirm')
                ->select(['id','invoice_no','order_date','amount','payment_method','status']))
                ->addColumn('action', 'backend.order.order_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
    public function indexdelivery(){
        if (request()->ajax()) {
            return datatables()->of(Order::where('status', 'delivering')
                ->select(['id','invoice_no','order_date','amount','payment_method','status']))
                ->addColumn('action', 'backend.order.order_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
    public function indexdelivered(){
        if (request()->ajax()) {
            return datatables()->of(Order::where('status', 'delivered')
                ->select(['id','invoice_no','order_date','amount','payment_method','status']))
                ->addColumn('action', 'backend.order.order_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
    public function indexcancelled(){
        if (request()->ajax()) {
            return datatables()->of(Order::whereIn('status', ['cancelled', 'failed'])
                ->select(['id', 'invoice_no', 'order_date', 'amount', 'payment_method', 'status']))
                ->addColumn('action', 'backend.order.order_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.order.order');
    }
    //end table

    public function viewDetail(Request $request){
        $id = array('id' => $request->id);
        $item  = OrderView::where($id)->first();
        return Response()->json($item);
    }

    public function getOrderItem(Request $request){
        $order_id = $request->input('id');
        $items = OrderItemView::where('order_id', $order_id)->get();
        return response()->json($items);
    }

    public function editOrder(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = Order::where($id)->first();

        return Response()->json($item);
    }
    public function update(Request $request){
        $id = $request->oid;
        // Find the Order model by its ID
        $status = $request->status;
        if($status==="delivered"){
            $product = OrderItem::where('order_id',$id)->get();
            foreach($product as $item){
                Product::where('id',$item->product_id)
                        ->update(['pro_qty' => DB::raw('pro_qty-'.$item->qty) ]);
            } 
        }
        $item = Order::find($id);
        if ($item) {
            // Update the attributes with the new values
            $item->status = $request->status;
            $item->confirmed_date = Carbon::now()->format('d F Y');
            // Save the changes to the database
            $item->save();
            return response()->json($item);
        } else {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }

    public function cancelled(Request $request)
    {
        // Find the order by its ID
        $order = Order::find($request->id);
        if (!$order) {
            return response()->json(['error' => 'Order not found']);
        }
        // Update the status and confirmed date
        $order->status = "failed"; // Use the correct field name (e.g., 'status')
        $order->confirmed_date = Carbon::now()->format('d F Y');
        $order->save();
        return response()->json(['success' => 'Order confirmed successfully']);
    }





}
