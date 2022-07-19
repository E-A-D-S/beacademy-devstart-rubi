<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\USer;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
