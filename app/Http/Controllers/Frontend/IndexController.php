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
}
