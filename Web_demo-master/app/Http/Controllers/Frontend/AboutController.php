<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Website;
class AboutController extends Controller
{

    public function index ()
    {
        $about = About::find(1);
        $website = Website::find(1);
        return view('frontend.about', compact('about', 'website'));
    }
}
