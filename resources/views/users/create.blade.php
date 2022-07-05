@extends('template.layout')
@section('title', 'Cadastrar usuário')

@section('content')
<main class="container w-50 mt-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
    <h1 class="mt-3 mb-3">Cadastrar Usuário</h1>

    <form method="" action="" class="pl-4 pr-4">
      <div class="form-group mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
  
      <div class="form-group mb-3">
        <label for="name" class="form-label">Email</label>
        <input type="email" class="form-control" id="name" name="name">
      </div>
  
      <div class="form-group mb-3">
        <label for="name" class="form-label">Senha</label>
        <input type="password" class="form-control" id="name" name="name">
      </div>
  
      <div class="form-group mb-3">
        <label for="name" class="form-label">Telefone</label>
        <input type="phone" class="form-control" id="name" name="name">
      </div>
  
      <div class="form-group mb-3">
        <label for="name" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
  
      <div class="form-group mb-3">
        <label for="name" class="form-label">Data Nascimento</label>
        <input type="date" class="form-control" id="name" name="name">
      </div>

      <div class="form-group mb-3">
        <label for="name" class="form-label">CPF</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="000.000.000-00">
      </div>
  
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </main>
@endsection
