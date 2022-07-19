@extends("template.layout")
@section('title', $viewData["title"])
@section('content')
    @foreach($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                Order #{{ $order["id"] }}
            </div>
            <div class="card-body">
                <b>Data:</b> {{ $order["created_at"] }}<br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                    <tr>
                        <th scope="col">Produto ID</th>
                        <th scope="col">Produto Name</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $order["id"] }}</td>
                            <td>{{ $order["name"] }}</td>
                            <td>${{ $order["sale_price"] }}</td>
                            <td>{{ $order["quantity"] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
@endsection
