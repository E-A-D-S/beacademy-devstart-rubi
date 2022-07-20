<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
<body>
    <header class="header">
        <figure>
            <img src="{{ asset('assets/img/banner-bottles.jpg') }}" alt="imagem de garrafas vazias"/>
        </figure>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse max-container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2"><a href="{{ route('index.index') }}" class="btn btn-outline-dark"><i class="fa fa-store">&nbsp;</i>Produtos</a></li>
                <li class="nav-item p-2"><a href="{{ route('users.login') }}" class="btn btn-outline-dark"><i class="fa fa-user">&nbsp;</i>Conta</a></li>
                <li class="nav-item p-2"><a href="{{ route('index.contact') }}" class="btn btn-outline-dark"><i class="fa fa-phone">&nbsp;</i>Contato</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark"><i class="fa fa-shopping-cart">&nbsp;</i>Carrinho</a></li>
                @if(Auth::User())
                    @if(Auth::User()->userType == 1)
                        <li class="nav-item p-2"><a href="{{ route('products.create') }}" class="btn btn-outline-dark"><i class="fa-solid fa-circle-plus">&nbsp;</i>Novo Produto</a></li>
                        <li class="nav-item p-2"><a href="{{ route('categories.show') }}" class="btn btn-outline-dark"><i class="fa-solid fa-wine-bottle">&nbsp;</i>Categorias</a></li>
                    @endif
                      <li class="nav-item p-2"><a href="{{ route('account.logout') }}" class="btn btn-outline-dark"><i class="fa-solid fa-door-open">&nbsp;</i>Logout</a></li>
                @endif
            </ul>
        </nav>
    </header>
    @yield("content")
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</html>
