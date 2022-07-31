@extends('template.layout')
@section('title', 'Checkout dados para pagamento')

@section('content')
<main class="container w-50 mt-5">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="form-control-lg mb-3">
                        <h1 class="mt-3 mb-3">Confirmar pagamento</h1>
                        <div class="form-group mb-3">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                        </div>
                        <div class="form-group mb-3">
                            <label for="cpf">CPF</label>
                            <input type="number" class="form-control" id="cpf" min="1" placeholder="CPF">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email"></input>
                        </div>
                        <button type="submit" class="btn btn-success">Finalizar Pagamento</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-control-lg mb-3">
                        <div class="text-center">
                            <span>
                                <i class="fa-solid fa-lock"></i>
                                Detalhes de pagamento armazenados em texto simples.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-2 mb-5">
        <div class="text-center">
            <img src="{{ asset('assets/images/flag-cards.png') }}" alt="Bandeiras de pagamentos"/>
            <img src="{{ asset('assets/images/logo-paylivre.svg') }}" alt="Paylivre payments"/>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/images/selo-pagamento.png') }}" width="780" alt="Selo de segurança"/>
        </div>
    </div>
</main>
@endsection
