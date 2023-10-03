<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Models\Product;
use App\Models\Partner;

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
}
