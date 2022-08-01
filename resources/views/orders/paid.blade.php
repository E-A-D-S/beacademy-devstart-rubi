@extends('template.layout')
@section('title', 'Checkout dados para pagamento')

@section('content')
<main class="container w-50 mt-5 mb-5">
  <div class="modal-content" style="background-color: #efefef;">
    <div class="modal-body text-dark">
      <div class="row">
        <div class="col-md-12 p-5">
          <h1 class="text-center mb-4">Pagamento confirmado</h1>
          <div class="text-center">
              <div>
                  <h4 class=" mb-3">Clique abaixo e confira todos os pedidos</h4>
              </div>
              <a href="{{ route('orders.details') }}" class="btn btn-success">Conferir Pedidos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
