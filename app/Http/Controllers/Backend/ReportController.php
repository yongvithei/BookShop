<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;
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
    public function GetSearchByYear(Request $request)
    {
        if (request()->ajax()) {
                return datatables()->of(Order::select(['id', 'invoice_no', 'order_date', 'amount', 'payment_method', 'status']))
                    ->addColumn('action', 'backend.report.order_action')
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
    }

    public function OrderInvoice($order_id){

        $order = Order::with('city','district','user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = Pdf::loadView('backend.report.invoice', compact('order','orderItem'))->setPaper('a4')->setOption([
                'tempDir' => public_path(),
                'chroot' => public_path(),
        ]);
        return $pdf->download('invoice.pdf');
    }

}
