<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <!-- CSS only -->
        <link href="../assets/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
<body>
    <header class="header">
        <figure>
            <img src="../assets/img/banner-bottles.jpg" alt="imagem de garrafas vazias"/>
        </figure>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse max-container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2"><a href="{{ route('index.index') }}" class="btn btn-outline-dark">inicio</a></li>
                <li class="nav-item p-2"><a href="{{ route('users.login') }}" class="btn btn-outline-dark">Conta</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 3</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 4</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 5</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 6</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 7</a></li>
                <li class="nav-item p-2"><a href="{{ route('index.contact') }}" class="btn btn-outline-dark">Contato</a></li>
            </ul>
        </nav>
    </header>
    @yield("content")

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../assets/js/scripts.js"></script>
</html>
