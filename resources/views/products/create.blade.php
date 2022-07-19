@extends('template.layout')
@section('title', 'Novo Produto')
@section ('content')

<main class="container w-50 mt-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">

@if($errors->any()) 
      <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
      </div>
  @endif

  <h1> Novo Produto</H1>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="Name">
  </div>
<div class="mb-3">
    <select name="categories" class="form-select" aria-label="Default select example">
        <option>Selecione uma categoria</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
    <div class="mb-3">
  <label for="quantity" class="form-label">Quantidade</label>
    <input type="number" class="form-control" id="quantity" name="quantity">
</div>
    <div class="mb-3">
  <label for="cost" class="form-label">Preço de Custo</label>
    <input type="text" class="form-control" id="cost" name="cost">
</div>
    <div class="mb-3">
  <label for="value" class="form-label">Preço de Venda</label>
    <input type="text" class="form-control" id="value" name="value">
</div>
         <div class="mb-3">
          <label for="image" class="form-label"> Selecione uma Imagem</label>
          <input type="file" class="form-control form control-md" id="image" name="image"/>
</div>
        <button type="submit" class="btn btn-primary">enviar</button>
  
</form>
@endsection
