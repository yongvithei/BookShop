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
            $products = $products->whereIn('category_id', $catIds);
        } else {
            $products = $products->where('status', 1)->orderBy('id', 'DESC');
        }

        // Price Range
        if (!empty($_GET['price'])) {
            $price = explode('-', $_GET['price']);
            $products = $products->whereBetween('price', $price);
        }

        // Fetch paginated results
        $products = $products->paginate(15); // Adjust the number as needed

        $categories = Category::orderBy('name', 'ASC')->get();

        return view('frontend.product.shop_page', compact('products', 'categories'));
    }

    public function ShopFeature()
    {
        $products = Product::query();

        // Add condition to filter featured products
        $products = $products->where('featured', 1);

        // Category
        if (!empty($_GET['category'])) {
            $slugs = explode(',', $_GET['category']);
            $catIds = Category::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('category_id', $catIds);
        } else {
            $products = $products->where('status', 1)->orderBy('id', 'DESC');
        }

        // Price Range
        if (!empty($_GET['price'])) {
            $price = explode('-', $_GET['price']);
            $products = $products->whereBetween('price', $price);
        }

        // Fetch paginated results
        $products = $products->paginate(15); // Adjust the number as needed

        $categories = Category::orderBy('name', 'ASC')->get();

        return view('frontend.product.feature_product', compact('products', 'categories'));
    }

    public function ShopNew()
    {
        $products = Product::query();

        // Add condition to filter featured products
        $products = $products->where('new', 1);

        // Category
        if (!empty($_GET['category'])) {
            $slugs = explode(',', $_GET['category']);
            $catIds = Category::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('category_id', $catIds);
        } else {
            $products = $products->where('status', 1)->orderBy('id', 'DESC');
        }

        // Price Range
        if (!empty($_GET['price'])) {
            $price = explode('-', $_GET['price']);
            $products = $products->whereBetween('price', $price);
        }

        // Fetch paginated results
        $products = $products->paginate(15); // Adjust the number as needed

        $categories = Category::orderBy('name', 'ASC')->get();

        return view('frontend.product.new_product', compact('products', 'categories'));
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
