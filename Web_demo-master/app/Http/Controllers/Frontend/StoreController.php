<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Website;
use App\Models\About;

class StoreController extends Controller
{
    public function index ()
    {
        $store = Store::find(1);
        $website = Website::find(1);
        $about = About::find(1);
        return view('frontend.store', compact('store', 'website', 'about'));
    }
}
