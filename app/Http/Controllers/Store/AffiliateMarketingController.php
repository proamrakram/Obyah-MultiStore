<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AffiliateMarketingController extends Controller
{
    public function index()
    {
        $category = ProductCategory::where('is_delete', 0)->where('parent_id', 0)->orderBy('created_at', 'desc')->get();
        return view('Store.affiliate.index')->with('category', $category);
    }

    public function add_affiliate()
    {
        $category = ProductCategory::where('is_delete', 0)->where('parent_id', 0)->orderBy('created_at', 'desc')->get();
        return view('Store.affiliate.add_affiliate')->with('category', $category);
    }
}
