@extends('template.layout')
@section('title', 'Cadastrar usuário')
@section('content')

  <main class="container mb-3">
    <h1 class="mt-3 mb-3">Cadastrar Usuário</h1>

    <form method="" action="">
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
  
      <div class="mb-3">
        <label for="name" class="form-label">Email</label>
        <input type="email" class="form-control" id="name" name="name">
      </div>
  
      <div class="mb-3">
        <label for="name" class="form-label">Senha</label>
        <input type="password" class="form-control" id="name" name="name">
      </div>
  
      <div class="mb-3">
        <label for="name" class="form-label">Telefone</label>
        <input type="phone" class="form-control" id="name" name="name">
      </div>
  
      <div class="mb-3">
        <label for="name" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
  
      <div class="mb-3">
        <label for="name" class="form-label">Data Nascimento</label>
        <input type="date" class="form-control" id="name" name="name">
      </div>
  
      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="typeOfUser" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Administrador
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="typeOfUser" id="typeOfUser2" checked>
          <label class="form-check-label" for="typeOfUser2">
            Cliente
          </label>
        </div>
      </div>
  
      <div class="mb-3">
        <label for="name" class="form-label">CPF</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="000.000.000-00">
      </div>
  
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </main>
@endsection
