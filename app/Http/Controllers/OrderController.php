<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Meus Pedidos";
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
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

    public function checkout()
    {
        return view('checkout');
    }

    public function payments(Request $request)
    {
        $data = $request->all();
        dd($data);

        $data = [];

        $response = Http::withHeaders([
            'X-First' => 'foo',
            'X-Second' => 'bar'
        ])->post('https://tracktools.vercel.app/api/checkout', [
            'name' => 'Taylor',
        ]);


        // curl --request POST \
        // --url https://tracktools.vercel.app/api/checkout \
        // --header 'Content-Type: application/json' \
        // --header 'token: UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ==' \
        // --data '{
        // "transaction_type": "ticket",
        // "transaction_amount": 129.48,
        // "transaction_installment": 2,
        // "customer_name": "Regis Santos",
        // "customer_document":"33355566677",
        // "customer_postcode": "12999444",
        // "customer_address_street": "Rua dos Bobos",
        // "customer_andress_number": "0",
        // "customer_address_neighborhood": "Muito engraçada",
        // "customer_address_city": "Caçapava",
        // "customer_address_state": "São Paulo",
        // "customer_address_country": "Brasil"
        // }


        // curl --request POST \
        // --url https://tracktools.vercel.app/api/checkout \
        // --header 'Content-Type: application/json' \
        // --header 'token: UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ==' \
        // --data '{
        // "transaction_type": "card",
        // "transaction_amount": 129.48,
        // "transaction_installments": 2,
        // "customer_name": "Regis Santos",
        // "customer_document":"33355566677",
        // "customer_card_number": "3333444455556666",
        // "customer_card_expiration_date": "12/2025",
        // "customer_card_cvv": "892"
        // }'
    }

}
