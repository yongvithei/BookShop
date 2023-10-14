<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Models\Product;
use App\Models\Partner;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $partners = Cache::remember('partner', now()->addMinutes(30), function () {
            return Partner::where('status', 'Active')
                ->select('avatar')
            ->get();
        });
        $news = Cache::remember('new_arrivals_button', now()->addMinutes(30), function () {
            return Product::where('status', 1)
                ->where('new', 1)
                ->orderBy('id', 'DESC')
                ->limit(4)
                ->get();
        });
        $featureds = Cache::remember('featureds_button', now()->addMinutes(30), function () {
            return Product::where('status', 1)
                ->where('featured', 1)
                ->orderBy('id', 'DESC')
                ->limit(4)
                ->get();
        });
        if (Auth::check()) {
        $user = Auth::user();
        // Attempt to retrieve the last_seen value from cache
        $lastSeen = Cache::get('user_' . $user->id . '_last_seen');
        // If the value is not found in cache or has expired, update it in the database and re-cache it
            if ($lastSeen === null) {
                $lastSeen = Carbon::now()->addSeconds(180);
                User::where('id', $user->id)->update(['last_seen' => $lastSeen]);
                // Cache the updated value with a short expiry time (e.g., 180 seconds)
                Cache::put('user_' . $user->id . '_last_seen', $lastSeen, 180);
            }
        }
        return view('frontend.main', compact('news','featureds','partners'));
    }

    public function ProductDetails($id){

        $product = Product::findOrFail($id);
        $multiImage = ProductImage::where('product_id',$id)->get();
        $cat_id = $product->category_id;
        $related = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(4)->get();

        return view('frontend.product.product_detail',compact('product','multiImage','related'));
    }

    public function CatWiseProduct($id){
      $productc = Product::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->get();
      $categories = Category::orderBy('name','ASC')->get();
      $bread = Category::where('id',$id)->first();

      return view('frontend.product.by_cate_view',compact('productc','categories','bread'));

     }
     public function SubCatWiseProduct($id){
      $products = Product::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->get();
      $breadsub = SubCategory::where('id',$id)->first();

      return view('frontend.product.by_sub_view',compact('products','breadsub'));
    }

    public function ProductViewAjax($id){

        $product = Product::with('category','subcategory')->findOrFail($id);

        return response()->json(array(
         'product' => $product,
        ));

     }
    public function ProductSearch(Request $request){

        $request->validate(['search' => "required"]);
        $item = $request->search;
        $products = Product::where('name','LIKE',"%$item%")->get();
        return view('frontend.product.search',compact('products','item'));

    }
    public function SearchProduct(Request $request){

       $request->validate(['search' => "required"]);

        $item = $request->search;
        $products = Product::where('name','LIKE',"%$item%")->select('name','thumbnail','price', 'discount_price','id')->limit(6)->get();

        return view('frontend.product.search_product',compact('products'));

     }
}
