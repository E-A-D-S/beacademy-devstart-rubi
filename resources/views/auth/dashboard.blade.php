@extends('template.layout')
@section('title', "Dashboard: ". Auth::user()->name)

@section('content')
@if(Auth::user()->userType == 1)
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card-counter primary">
                    <i class="fa-solid fa-user"></i>
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
                    <i class="fa fa-wine-glass"></i>
                    <span class="count-numbers">{{ count($products)}}</span>
                    <span class="count-name">Produtos Disponíveis</span>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container w-50 mt-5">
    @if(isset($error))
    <div class="alert alert-primary" role="alert">
            {{ $error }}
        </div>
    @endif
    <div class="form-control-lg" style="background-color: #efefef;">
        <div class="form-control-lg d-flex justify-content-between">
            <div class="form-control-lg">
                <h2>Dashboard</h2>
                <div>
                    {{ $user = Auth::user()->name }}
                </div>
                <div>
                    {{ $user = Auth::user()->email }}
                </div>
                <div>
                    {{ $user = Auth::user()->birthday }}
                </div>
                <div>
                    {{ $user = Auth::user()->created_at }}
                </div>
            </div>
            <div class="form-control-lg float-end">
                <a href="{{ route('orders.index') }}" class="btn btn-outline-dark">
                    <i class="fa fa-shopping-bag">&nbsp;</i>Pedidos
                </a>
            </div>
        </div>
    </div>
</d>
@endsection 