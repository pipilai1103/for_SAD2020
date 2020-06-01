<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Website;

class HomeController extends Controller
{
    public function index ()
    {
        $home = Home::find(1);
        $website = Website::find(1);
        return view('frontend.index', compact('home', 'website'));
    }
}
