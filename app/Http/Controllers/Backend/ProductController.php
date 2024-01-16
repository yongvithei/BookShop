<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\TempImage;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Partner;
use App\Models\ProductView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Image;
use App\Http\Resources\ProductResource;
use Intervention\Image\Exception\ImageException;
class ProductController extends Controller
{

    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(ProductView::select(['id', 'name', 'selling_price','thumbnail','_status']))
                ->addColumn('action', 'backend.product.pro_action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.product.all_product');
    }
    public function create() {
        $categories = Category::select('id', 'name')->where('status', 1)->get();
        $subcategories = SubCategory::select('id', 'sub_name')->where('status','Public')->get();
        $partners = Partner::select('id', 'name')->where('status','Active')->get();
        return view('backend.product.add_product',compact('categories','subcategories','partners'));
    }
    public function store(Request $request) {
        $validator = Validator::make($request->all(), array(
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'price_dis' => 'nullable|numeric|min:0',
            'cate_Id' => 'nullable|exists:categories,id',
            'subcate_Id' => 'nullable|exists:sub_categories,id',
            'part_id' => 'nullable|exists:partners,id',
            'pro_code' => 'nullable|string|max:50|unique:' . Product::class,
            'pro_qty' => 'nullable|numeric|min:0',
            'short_desc' => 'nullable|string|max:500',
            'long_desc' => 'nullable|string',
            'new' => 'nullable|boolean',
            'featured' => 'nullable|boolean',
            'status' => 'nullable|in:1,0',
        ));

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/products/thumbnail/' . $name_gen);
            $save_url = 'uploads/products/thumbnail/' . $name_gen;
        } else {
            $save_url = "";
        }


        $status = $request->has('status') ? 1 : 0;
        if ($validator->passes()) {
            $product = new Product;
            $product->name = $request->name;
            $product->slug = strtolower(str_replace(' ', '-',$request->name));
            $product->price = $request->price;
            $product->discount_price = $request->price_dis;
            $product->category_id = $request->cate_Id;
            $product->subcategory_id = $request->subcate_Id;
            $product->partner_id = $request->part_id;
            $product->pro_code = $request->pro_code;
            $product->pro_qty = $request->pro_qty;
            $product->short_desc = $request->short_desc;
            $product->long_desc = $request->long_desc;
            $product->new = $request->new;
            $product->featured = $request->featured;
            $product->status = $status;
            $product->thumbnail = $save_url;
            $product->save();
            if (!empty($request->image_id)) {
                $caption = $request->caption;
                foreach ($request->image_id as $key => $imageId) {
                    $tempImage = TempImage::find($imageId);
                    $extArray = explode('.',$tempImage->name);
                    $ext = last($extArray);
                    $productImage = new ProductImage;
                    $productImage->name = 'NULL';
                    $productImage->product_id = $product->id;
                    $productImage->caption = $caption[$key];
                    $productImage->save();
                    $newImageName = $productImage->id.'.'.$ext;
                    $productImage->name = $newImageName;
                    $productImage->save();
                    // First Thumbnail
                    $sourcePath = public_path('uploads/temp/'.$tempImage->name);
                    $destPath = public_path('uploads/products/small/'.$newImageName);
                    $img = Image::make($sourcePath);
                    $img->fit(250,400);
                    $img->save($destPath);
                }
            }

            $request->session()->flash('success','Product add successfully.');
            return response()->json([
                'status' => true,
                'message' => 'Product added successfully.'
            ]);

        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
    public function edit($product_id, Request $request) {
        $product = Product::find($product_id);
        if ($product == null) {
            return redirect()->route('pro.index');
        }
        $productImages = ProductImage::where('product_id',$product->id)->get();
        $categories = Category::select('id', 'name')->where('status', 1)->get();
        $subcategories = SubCategory::select('id', 'sub_name')->where('status','Public')->get();
        $partners = Partner::select('id', 'name')->where('status','Active')->get();
        $productView = ProductView::select('sub_names', 'cate_names', 'partner_name')->where('id', $product->id)->first();



        $data['productView'] = $productView;
        $data['product'] = $product;
        $data['categories'] = $categories;
        $data['partners'] = $partners;
        $data['subcategories'] = $subcategories;
        $data['productImages'] = $productImages;
        return view('backend.product.edit_product',$data);
    }
    public function update($product_id, Request $request) {
        $product = Product::find($product_id);
        if ($product == null) {
            return response()->json([
                'status' => false,
                'notFound' => true
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
            // 'cate_Id' => 'required|exists:categories,id',
            // 'pro_code' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
        $oldImage = $request->old_img;

        if ($request->hasFile('thumbnail')) {
            // Upload a new image
            $image = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/products/thumbnail/' . $name_gen);
            $save_url = 'uploads/products/thumbnail/' . $name_gen;

            // Remove the old image
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        } else {
            $save_url = $oldImage;
        }

             $status = $request->has('status') ? 1 : 0;
            if ($validator->passes()) {
                $product->name = $request->name;
                $product->slug = strtolower(str_replace(' ', '-',$request->name));
                $product->price = $request->price;
                $product->discount_price = $request->price_dis;
                $product->category_id = $request->cate_Id;
                $product->subcategory_id = $request->subcate_Id;
                $product->partner_id = $request->part_id;
                $product->pro_code = $request->pro_code;
                $product->pro_qty = $request->pro_qty;
                $product->short_desc = $request->short_desc;
                $product->long_desc = $request->long_desc;
                $product->new = $request->new;
                $product->featured = $request->featured;
                $product->thumbnail = $save_url;
                $product->status = $status;
                $product->save();
                if (!empty($request->image_id)) {
                    $caption = $request->caption;
                    foreach ($request->image_id as $key => $imageId) {
                        $productImage = ProductImage::find($imageId);
                        $productImage->caption = $caption[$key];
                        $productImage->save();
                    }
                }
                $request->session()->flash('success','Product updated successfully.');
                return response()->json([
                    'status' => true,
                    'message' => 'Product updated successfully.'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()
                ]);
            }
    }

    public function view(Request $request)
    {
        $id = array('id' => $request->id);
        $item  = ProductView::where($id)->first();
        return Response()->json($item);
    }


    public function destroy(Request $request)
    {
        $item = Product::find($request->id);
        if (!$item) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        $item->delete();
        return response()->json(['success' => 'Product soft deleted successfully']);
    }

    public function allProduct(Request $request){
        $products = new Product();
        if ($request->search) {
            $products = $products->where('name', 'LIKE', "%{$request->search}%");
        }
        $products = $products->latest()->paginate(15);
        if (request()->wantsJson()) {
            return response()->json([
                'data' => ProductResource::collection($products),
                'current_page' => $products->currentPage(),
                'next_page_url' => $products->nextPageUrl(),
                'prev_page_url' => $products->previousPageUrl(),
                'last_page' => $products->lastPage(),
            ]);
        }
    }

}
