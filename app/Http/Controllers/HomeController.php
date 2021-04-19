<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function shopify()
    {
        return view('shopify')->with(['stores' => Store::all()]);
    }
}
