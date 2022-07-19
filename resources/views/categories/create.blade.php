@extends('template.layout')
@section('title', 'Nova Categoria')
@section ('content')
<main class="container w-50 mt-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">

    <h1> Nova Categoria</H1>
    <form action="{{ route('categories.store') }}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="Name">
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
  
</form>
@endsection