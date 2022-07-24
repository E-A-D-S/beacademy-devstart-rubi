<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $products = Product::where('id',1)->first();


        return view('cart.show', compact('products'));
    }
}
