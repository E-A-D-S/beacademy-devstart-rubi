<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product
};

class IndexController extends Controller
{

    public function index()
    {
        // return view("index");
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function contact()
    {
        return view("contact");
    }
}