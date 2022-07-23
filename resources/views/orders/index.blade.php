@extends("template.layout")
@section('title', $viewData["title"])
@section('content')
@foreach($viewData["orders"] as $order)
    <main class="container mt-5">
        <div class="card mb-4">
            <div class="card-header">
                Pedido #{{ $order->getId() }}
            </div>
            <div class="card-body">
                <b>Data:</b> {{ formatDateTime($order->getCreatedAt()) }}<br/>
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                    <tr>
                        <th scope="col">Produto ID</th>
                        <th scope="col">Produto Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($order->getItems() as $item)
                        <tr>
                            <td>{{ $item->getId() }}</td>
                            <td>{{ $item->getProduct()->getName()}}</td>
                            <td>R${{ formatMoney($item->getPrice()) }}</td>
                            <td>{{ $item->getQuantity() }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endforeach
@endsection
