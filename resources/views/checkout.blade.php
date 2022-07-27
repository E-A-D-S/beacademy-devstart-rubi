@extends("template.layout")
@section('title', "Finalizar Compra: ". Auth::user()->name)
@section("content")
<table id="cart" class="table table-hover table-condensed">
  <thead>
  <tr>
      <th style="width:50%">Produto</th>
      <th style="width:10%">Preço</th>
      <th style="width:8%">Quantidade</th>
      <th style="width:22%" class="text-center">Subtotal</th>
      <th style="width:10%"></th>
  </tr>
  </thead>
  <tbody>

  <?php $total = 0 ?>

  @if(session('cart'))
      @foreach(session('cart') as $id => $details)
          <?php $total += $details['sale_price'] * $details['quantity'] ?>
          <tr>
              <td data-th="Product">
                  <div class="row">
                    @if( $details['image'])
                      <div class="col-sm-3 hidden-xs">
                        <img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/>
                      </div>
                        @else 
                          <div class="col-sm-3 hidden-xs">
                            <img width="100" height="100" class="img-responsive" src="{{ asset('assets/img/products/wine/vinho-sem-rotulo.png') }}" alt="Card image cap">
                          </div>   
                        @endif
                      <div class="col-sm-9">
                          <h4 class="nomargin">{{ $details['name'] }}</h4>
                      </div>
                  </div>
              </td>
              <td data-th="Price">${{ $details['sale_price'] }}</td>
              <td data-th="Quantity">
                  <input type="number" disabled value="{{ $details['quantity'] }}" class="form-control quantity" />
              </td>
              <td data-th="Subtotal" class="text-center">${{ $details['sale_price'] * $details['quantity'] }}</td>
          </tr>
      @endforeach
  @endif

  </tbody>
  <tfoot>
  <tr>
      <td class="hidden-xs"></td>
      <td colspan="2" class="hidden-xs"></td>
      <td class="hidden-xs text-center"><strong>Total R${{ $total }}</strong></td>
      <td><a href="#" class="btn btn-primary">Finalizar Compra <i class="fa fa-angle-right"></a></td>
  </tr>
  </tfoot>
</table>
@endsection