<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Yajra\DataTables\Exceptions\Exception;

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
}
