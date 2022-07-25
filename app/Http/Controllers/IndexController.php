<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product,
    User
};

class IndexController extends Controller
{
    public function __construct(Product $products) {
        $this->productsModel = $products;
    }

    public function index(Request $request)
    {
        $products = $this->productsModel->getProducts($request->search ?? '');
        return view('index', compact('products'));
    }

    public function contact()
    {
        return view("contact");
    }
}