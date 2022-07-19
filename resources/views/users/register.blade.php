@extends('template.layout')
@section('title', 'Cadastrar usuário')

@section('content')
    <main class="container w-50 mt-5">
        @if(isset($message))
            <div class="alert alert-primary" role="alert">
                {{ $message }}
            </div>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-primary" role="alert">
                {{ $error }}
            </div>
            @endforeach
        @endif

        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #efefef;">
                <div class="modal-body text-dark">
                    <form method="post" action="{{ route('users.store') }}" class="form-control-lg mb-3">
                        @csrf
                        <h1 class="mt-3 mb-3">Cadastrar Usuário</h1>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="password">Senha</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                    <a href="#" class="togglePassword float-right">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="phone" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group mb-3">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>

                        <div class="form-group mb-3">
                            <label for="state" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="state" name="state">
                        </div>

                        <div class="form-group mb-3">
                            <label for="birthday" class="form-label">Data Nascimento</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>


                        <div class="form-group mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
