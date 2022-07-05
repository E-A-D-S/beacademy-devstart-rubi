<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Empresarial</title>
        <!-- CSS only -->
        <link href="../assets/css/style.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
<body>
    <header class="header">
        <figure>
            <img src="../assets/img/banner-bottles.jpg" class="bannerImage" alt="imagem de garrafas vazias"/>
        </figure>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse max-container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2"><a href="{{ route('index.index') }}" class="btn btn-outline-dark">inicio</a></li>
                <li class="nav-item p-2"><a href="{{ route('users.login') }}" class="btn btn-outline-dark">Conta</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">Conta</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 3</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 4</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 5</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 6</a></li>
                <li class="nav-item p-2"><a href="#" class="btn btn-outline-dark">link 7</a></li>
            </ul>
        </nav>
    </header>
    @yield("content")
</body>
</html>
