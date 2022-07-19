<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public static $orders = [
        ["id"=>"1","name"=>"Vinho1","description"=>"Suave","category"=>"Vinhos","quantity"=>"5","sale_price"=>"10.90",
            "image"=>"vinho-fabian.jpg","created_at"=>"2022-07-18 20:42:23","user_id"=>"1"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Meus Pedidos";
        $viewData["orders"] = OrderController::$orders;
        return view('orders.index')->with("viewData", $viewData);

    }

    public function create()
    {
        return view("orders.create");
    }

    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route("orders.index");
    }

    public function edit($id)
    {
        $order = Order::where("id", $id)->first();
        if(!empty($order)) {
            return view("orders.edit");
        } else {
            return redirect()->route("orders.index");
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'cost' => $request->cost,
            'sale' => $request->value,
            'image'=>$request->image
        ];

        Order::where('id', $id)->update($data);
        return redirect()->route("orders.index");
    }

    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        return redirect()->route("orders.index");
    }
}
