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
use Carbon\Carbon;

class PosOrderController extends Controller
{
    public function index() {
        if (request()->wantsJson()) {
            $id = auth()->user()->id; // Get the authenticated user's id

            $latestOrders = PosOrder::with('customer') // Eager load the customer relationship
            ->where('user_id', $id)
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
        $info = SiteInfo::latest()->first();
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

    public function getSalesData(Request $request)
    {
        $timeRange = $request->input('time_range');

        // Initialize variables
        $amount = 0;
        $received = 0;
        $count = 0;
        $seAmount = 0;
        $reAmount = 0;
        $rate = SiteInfo::select('exchange')->first();


        // Update your queries based on the selected time range
        switch ($timeRange) {
            case 'today':
                $today = Carbon::today();
                $amount = PosOrder::whereDate('created_at', $today)->sum('amount');
                $received = PosOrder::whereDate('created_at', $today)->sum('received');
                $count = PosOrder::whereDate('created_at', $today)->count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;
            case 'yesterday':
                // Data for yesterday
                $yesterday = Carbon::yesterday();
                $amount = PosOrder::whereDate('created_at', $yesterday)->sum('amount');
                $received = PosOrder::whereDate('created_at', $yesterday)->sum('received');
                $count = PosOrder::whereDate('created_at', $yesterday)->count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;

            case 'last_month':
                // Data for last month
                $lastMonth = Carbon::now()->subMonth(); // Get the first day of the previous month
                $amount = PosOrder::whereDate('created_at', '>=', $lastMonth->startOfMonth())
                    ->whereDate('created_at', '<=', $lastMonth->endOfMonth())
                    ->sum('amount');
                $received = PosOrder::whereDate('created_at', '>=', $lastMonth->startOfMonth())
                    ->whereDate('created_at', '<=', $lastMonth->endOfMonth())
                    ->sum('received');
                $count = PosOrder::whereDate('created_at', '>=', $lastMonth->startOfMonth())
                    ->whereDate('created_at', '<=', $lastMonth->endOfMonth())
                    ->count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;

            case 'last_3_months':
                // Data for last 3 months
                $last3MonthsStart = Carbon::now()->subMonths(2)->startOfMonth(); // Get the first day of the month 3 months ago
                $last3MonthsEnd = Carbon::now()->endOfMonth(); // Get the last day of the current month

                $amount = PosOrder::whereDate('created_at', '>=', $last3MonthsStart)
                    ->whereDate('created_at', '<=', $last3MonthsEnd)
                    ->sum('amount');
                $received = PosOrder::whereDate('created_at', '>=', $last3MonthsStart)
                    ->whereDate('created_at', '<=', $last3MonthsEnd)
                    ->sum('received');
                $count = PosOrder::whereDate('created_at', '>=', $last3MonthsStart)
                    ->whereDate('created_at', '<=', $last3MonthsEnd)
                    ->count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;
            case 'this_year':
                // Data for this year
                $thisYearStart = Carbon::now()->startOfYear();
                $thisYearEnd = Carbon::now()->endOfYear();

                $amount = PosOrder::whereDate('created_at', '>=', $thisYearStart)
                    ->whereDate('created_at', '<=', $thisYearEnd)
                    ->sum('amount');
                $received = PosOrder::whereDate('created_at', '>=', $thisYearStart)
                    ->whereDate('created_at', '<=', $thisYearEnd)
                    ->sum('received');
                $count = PosOrder::whereDate('created_at', '>=', $thisYearStart)
                    ->whereDate('created_at', '<=', $thisYearEnd)
                    ->count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;

            case 'last_year':
                // Data for last year
                $lastYearStart = Carbon::now()->subYear()->startOfYear();
                $lastYearEnd = Carbon::now()->subYear()->endOfYear();

                $amount = PosOrder::whereDate('created_at', '>=', $lastYearStart)
                    ->whereDate('created_at', '<=', $lastYearEnd)
                    ->sum('amount');
                $received = PosOrder::whereDate('created_at', '>=', $lastYearStart)
                    ->whereDate('created_at', '<=', $lastYearEnd)
                    ->sum('received');
                $count = PosOrder::whereDate('created_at', '>=', $lastYearStart)
                    ->whereDate('created_at', '<=', $lastYearEnd)
                    ->count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;
            case 'all_time':
                // Data for all time
                $amount = PosOrder::sum('amount');
                $received = PosOrder::sum('received');
                $count = PosOrder::count('id');
                $amountSell = $amount / $rate->exchange;
                $amountReceived = $received / $rate->exchange;
                $seAmount = number_format($amountSell, 2);
                $reAmount = number_format($amountReceived, 2);
                break;
            // Add cases for other time ranges as needed
            default:
                // Handle the default case or additional time ranges
                break;
        }

        // Return the data as a JSON response
        return response()->json([
            'Amount' => $amount,
            'Received' => $received,
            'Count' => $count,
            'reAmount' => $reAmount,
            'seAmount' => $seAmount,

            // Add more data as needed
        ]);
    }
}
