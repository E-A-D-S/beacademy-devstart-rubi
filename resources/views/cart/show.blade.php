@extends("template.layout")
@section('title', 'Carrinho')
@section('content')

<section class="h-100">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Carrinho de compras</h3>
          
        </div>

        <div class="card rounded-3 mb-4" style="background-color: #eee">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                    @if($products->image)
      <th> <img src="{{ asset('storage/'.$products->image)}}" width="50px" height="50px" class="img-fluid rounded-3" alt="Cotton T-shirt"></th>
      @else
      <th> <img src="https://static.paodeacucar.com/img/uploads/1/840/579840.png" width="150px" height="150px" class="img-fluid rounded-3" alt="Cotton T-shirt"></th>
      @endif
                  </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{ $products->name}}</p>
                <p >{{$products->category}}</p>
              </div>

              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">Quantidade</p>
                <input type="number" class="mx-sm-1" min="1" max="{{ $products->quantity }}" value="3">
              </div>
              
             
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
              <p class="lead fw-normal mb-2">Preço</p>
                <h5 class="mb-0">$499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="card" style="background-color: #eee">
          <div class="card-body d-flex flex-row-reverse">
            <button type="button" class="btn btn-warning btn-block btn-lg" href="#" >Finalizar compra</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


@endsection
