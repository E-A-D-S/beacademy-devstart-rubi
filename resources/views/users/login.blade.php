@extends('template.layout')
@extends('title', 'titulo da página')

@section('content')

<main class="content text-light p-5">

<div>
  <div class="modal-dialog" role="document">
    <div class="modal-content style="background-color: #efefef;>
    <div class="modal-body text-dark">
      <h1 class="mb-3">Login</h1>

        <form class="pl-4 pr-4">
          @csrf
    <div class="form-group">
        <label>Email</label>
        <input type="Email" class="form-control" placeholder="Digite seu email">
    </div>
     <div class="form-group">
        <label>Senha</label>
          <a href="#" class="float-right">
            <i class="fa fa-eye"></i>
          </a>
          <input type="Senha" class="form-control" placeholder="Digite sua senha">
     </div>

          <button type="submit" class="btn btn-primary btn-block" >Entrar</button>

    <div class="row mt-3">
    <div class="col">
          <input type="checkbox"
            name="remember"
            id="remember"/><label
            for="remember">Lembrar-me</label>
        </div>

     <div class="col">
             <a href="#">Esqueci minha senha</a>
      </div>
      </div>
       <div class="text-center mt-4 mb-1">
          <span>Não possui cadastro? </span>&nbsp;
          <a href="#">Cadastre-se aqui</a>
      </div>
      </form>
      </div>
      </div>
    </div>
</div>
</main
@endsection
