<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        config(['sanctum.expiration' => Auth::user()->token_expiry]);
        return view('home');
    }
    public function shopify()
    {
        return view('shopify')->with(['stores' => Store::all()]);
    }
    public function token_expiry(Request $request){
        User::where('id', Auth::id())->update([
            'token_expiry' => $request->expiry
        ]);
        return redirect()->back();
    }
}
