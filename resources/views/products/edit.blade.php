@extends('template.layout')
@section('title', 'Editar Produto')
@section ('content')

    <main class="container w-50 mt-5">
        <div class="form-control-lg" style="background-color: #efefef;">
            <div class="form-control-lg">
            @if($errors->any()) 
                  <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                  </div>
              @endif
              <form action="{{ route('products.update', $product->id) }}" method="POST" class="form-control-lg" enctype="multipart/form-data">
                <h1> Editar Produto</H1>
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="Name" value="{{ $product->name }}">
                </div>
                <div class="mb-3">
                  <select name="categories" class="form-select" aria-label="Default select example">
                      <option>Selecione uma categoria</option>
                      @foreach($categories as $category)
                          <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Descrição</label>
                  <textarea class="form-control" id="description" name="description" style="resize: none">{{ $product->description }}</textarea>
                </div>
                <div class="mb-3">
                  <label for="quantity" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" id="quant

@endsection