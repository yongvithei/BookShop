<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Carbon\Carbon;
use Auth;
use App\Models\ReviewView;

class ReviewController extends Controller
{
    public function StoreReview(Request $request){

        $product = $request->product_id;
        $request->validate([
            'comment' => 'required',
        ]);

        Review::insert([

            'product_id' => $product,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'rating' => $request->quality,
            'created_at' => Carbon::now(),

        ]);

        return redirect()->back();

    }
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(ReviewView::where('status', 0)
                ->select(['id', 'comment', 'user_name','pro_name','rating','status']))
                ->addColumn('action', 'backend.review.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

    }
    public function indexapprove()
    {
        if(request()->ajax()) {
            return datatables()->of(ReviewView::where('status', 1)
                ->select(['id', 'comment', 'user_name','pro_name','rating','status']))
                ->addColumn('action', 'backend.review.actionp')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

    }
     public function destroy(Request $request)
    {
        $item = Review::find($request->id);

        if (!$item) {
            return response()->json(['message' => 'Review not found'], 404);
        }
        $deleted = $item->delete();
        return Response()->json($item);
    }
    public function approve(Request $request)
    {
        // Find the order by its ID
        $review = Review::find($request->id);
        if (!$review) {
            return response()->json(['error' => 'Order not found']);
        }
        // Update the status and confirmed date
        $review->status = 1; // Use the correct field name (e.g., 'status')
        $review->save();
        return response()->json(['success' => 'Order confirmed successfully']);
    }
    public function revoke(Request $request)
    {
        // Find the order by its ID
        $review = Review::find($request->id);
        if (!$review) {
            return response()->json(['error' => 'Order not found']);
        }
        // Update the status and confirmed date
        $review->status = 0; // Use the correct field name (e.g., 'status')
        $review->save();
        return response()->json(['success' => 'Order confirmed successfully']);
    }
    public function delete($id)
    {
        $review = Review::findOrFail($id);

        // Optionally, you can add authorization to ensure only the owner can delete
        // $this->authorize('delete', $review);

        $review->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
