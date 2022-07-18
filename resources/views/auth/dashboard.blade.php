@extends('template.layout')
@section('title', "Dashboard: ". Auth::user()->name)

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

@if(Auth::user()->is_admin)
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card-counter primary">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers">{{ count($users) }}</span>
                    <span class="count-name">Clientes cadastrados</span>
                </div>
            </div>

            <div class="col">
                <div class="card-counter danger">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers">368</span>
                    <span class="count-name">Compras Realizadas</span>
                </div>
            </div>

            <div class="col">
                <div class="card-counter success">
                    <i class="fas fa-wine-glass"></i>
                    <span class="count-numbers">{{ count($products)}}</span>
                    <span class="count-name">Produtos Disponíveis</span>
                </div>
            </div>
        </div>
    </div>
@endif


<main class="container w-50 mt-5">
    @if(isset($error))
        <div class="alert alert-primary" role="alert">
            {{ $error }}
        </div>
    @endif


    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <h1>Precisamos de um dashboard</h1>
            {{ $user = Auth::user()->name }}
            <br/>
            {{ $user = Auth::user()->email }}
        </div>
    </div>
</main>
@endsection 