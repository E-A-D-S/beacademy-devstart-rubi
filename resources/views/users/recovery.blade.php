@extends('template.layout')
@section('title', 'Recupere a sua senha')
@section('content')

<main class="container w-50 mt-5">

  @if(isset($message))
  <div class="alert alert-primary" role="alert">
    {{ $message }}
  </div>
  @endif
  @if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>
  @endforeach
  @endif

  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
      <div class="modal-body text-dark">
        <form active="" method="post" class="pl-4 pr-4">
          @csrf
          <h1 class="mb-3">Recuperar senha</h1>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Digite seu email cadastrado">
          </div>
          <div class="form-group">
            <label>Telefone</label>
            <input type="tel" class="form-control" placeholder="Digite seu telefone cadastrado">
          </div>
          <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" placeholder="Digite seu CPF cadastrado">
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-3">Recuperar senha</button>
        </form>
      </div>
    </div>
  </div>
</main @endsection
