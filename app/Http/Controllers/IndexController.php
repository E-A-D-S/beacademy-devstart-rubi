<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product
};

class IndexController extends Controller
{
    public function __construct(Product $products) {
        $this->products = $products;
    }

    public function index(Request $request)
    {
        $products = Product::paginate(9);
        // $products = $this->model->getUsers($request->search ?? '');
        // $this->products->getProducts();
        return view('index', compact('products'));
    }

    public function contact()
    {
        return view("contact");
    }
}