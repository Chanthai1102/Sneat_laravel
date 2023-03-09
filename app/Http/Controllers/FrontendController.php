<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontendController extends Controller
{
    public function home(){
        return view('Frontend.home');
    }
    public function shop(){
        return view('Frontend.shop');
    }

    public function product_detail(){
        return view('Frontend.product_detail');
    }
}
