<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ShopController extends Controller
{
    public function ShopPage()
    {
        $products = Product::query();
        // Category
        if (!empty($_GET['category'])) {
            $slugs = explode(',', $_GET['category']);
            $catIds = Category::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = Product::whereIn('category_id', $catIds)->get();
        } else{
             $products = Product::where('status',1)->orderBy('id','DESC')->get();
         }

         // Price Range 

         if(!empty($_GET['price'])){
            $price = explode('-',$_GET['price']);
            $products = $products->whereBetween('price',$price);
         }
        $categories = Category::orderBy('name', 'ASC')->get();

        return view('frontend.product.shop_page', compact('products', 'categories'));
    }

    public function ShopFilter(Request $request)
    {

        $data = $request->all();

        /// Filter For Category

        $catUrl = "";
        if (!empty($data['category'])) {
            foreach ($data['category'] as $category) {
                if (empty($catUrl)) {
                    $catUrl .= '&category=' . $category;
                } else {
                    $catUrl .= ',' . $category;
                }
            }
        }
        // Filter For Price Range
        $priceRangeUrl = "";

        if (!empty($data['price_range'])) {
            // Handle the price range filter, e.g., building the URL or performing a database query
            $priceRangeUrl = '&price=' . $data['price_range'];

            // You can now use $priceRangeUrl to filter your products or construct URLs as needed.
        }


        return redirect()->route('shop.page', $catUrl.$priceRangeUrl);
    }// End Method


}
