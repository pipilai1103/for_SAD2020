<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Website;

class ProductController extends Controller
{
    public function index ()
    {
        $products = Product::orderBy('id')->get();
        $website = Website::find(1);
        return view('frontend.products', compact('products', 'website'));
    }
}
