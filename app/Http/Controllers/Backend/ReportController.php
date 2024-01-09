<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\RedirectResponse;
use PDF;
use App\Models\OrderView;
use App\Models\SiteInfo;
class ReportController extends Controller
{
    public function SearchByDate(Request $request)
{
    $formatDate = null; // Define the variable with a default value

    if ($request->has('date') && !empty($request->date)) {
        $date = new DateTime($request->date);
        $formatDate = $date->format('d F Y');

        $orders = Order::where('order_date', $formatDate)->latest()->get();


    } else {

    }

    return view('backend.report.by_date', compact('formatDate'));
}
    public function SearchByYear(Request $request){

        $formatYear = null;
        if ($request->has('year_number') && !empty($request->year_number)) {
            $formatYear = $request->year_number;
        } else {
        }
        return view('backend.report.by_year', compact('formatYear'));
    }
    public function SearchByMonth(Request $request){

        $year = null;
        $month = null;
        if ($request->has('year') && !empty($request->year)) {
            $year = $request->year;
            $month = $request->month;
        } else {
        }
        return view('backend.report.by_month', compact('year','month'));
    }
    public function GetSearchByDate(Request $request)
    {
        if (request()->ajax()) {
                return datatables()->of(Order::select(['id', 'invoice_no', 'order_date', 'amount', 'payment_method', 'status']))
                    ->addColumn('action', 'backend.report.order_action')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
    }
     public function GetSearchByName()
    {
        if (request()->ajax()) {
                return datatables()->of(OrderView::select(['id', 'name', 'order_date', 'amount', 'payment_method', 'status']))
                    ->addColumn('action', 'backend.report.order_action')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
    }
    public function OrderInvoice($order_id){
        $info = SiteInfo::latest()->first();
        $order = Order::with('city','district','user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();


        $pdf = PDF::loadView('frontend.dashboard.order_invoice', compact('order','orderItem','info'),[], [
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

}
